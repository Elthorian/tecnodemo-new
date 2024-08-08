<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Asignacion;
use Carbon\Carbon;

class OperarioController extends Controller
{
    public function index()
    {
        $operarios = Usuario::where('activo', 1)->where('rolId', 2)->get();
        return view('intranet/admin/operarios/index', [
            'operarios' => $operarios,
        ]);
    }

    public function create()
    {
        $clientes = Cliente::where('activo', 1)->get();
        return view('intranet/admin/operarios/create', [
            'clientes' => $clientes,
        ]);
    }

    public function store(Request $request)
    {
        $operario = Usuario::where('usuario', $request->usuario)->first();
        if($operario != null)
        {
            return redirect()->route('intranet.clientes.edit', $operario->id)->withErrors('El nombre de usuario ya está siendo utilizado.');
        }
        $operario = Usuario::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'rolId' => 2,
            'usuario' => $request->usuario,
            'password' => md5($request->password),
            'activo' => 1,
            'ultimaEdicion' => Carbon::now()->toDateTimeString(),
            'fechaCreacion' => Carbon::now()->toDateTimeString(),
        ]);

        $clientesNuevos = $request->clientes != null ? $request->clientes : [];
        foreach($clientesNuevos as $clienteId)
        {
            Asignacion::create([
                'clienteId' => $clienteId,
                'operarioId' => $operario->id,
                'fechaAsignacion' => Carbon::now()->toDateTimeString(),
                'fechaInicio' => Carbon::now()->toDateTimeString(),
                'fechaFinal' => null,
                'activo' => 1
            ]);
        }
        return redirect()->route('intranet.operarios.edit', $operario->id)->withSuccess('Operario creado correctamente.');
    }

    public function edit($id)
    {
        $operario = Usuario::whereId($id)->first();
        $clientes = Cliente::where('activo', 1)->get();
        return view('intranet/admin/operarios/edit', [
            'clientes' => $clientes,
            'operario' => $operario,
        ]);
    }

    public function update(Request $request, $id)
    {
        $operario = Usuario::where('id', $request->id)->first();
        $data = [
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'rolId' => 2,
            'usuario' => $request->usuario,
            'activo' => 1,
            'ultimaEdicion' => Carbon::now()->toDateTimeString()
        ];

        if($request->has('password') && strlen(trim($request->password)) > 0)
        {
            $data['password'] = md5($request->password);
        }

        $operario->update($data);

        $clientesNuevos = $request->clientes != null ? $request->clientes : [];
        $clientesActuales = [];
        foreach($operario->Asignaciones as $asignacion)
        {
            if($asignacion->activo == 1)
            {
                $clientesActuales[] = $asignacion->clienteId;
            }
        }

        //Obtenemos las nuevas asignaciones comparando los 2 arrays (El de operarios asignados actuales con los que queremos asignar)
        $asignacionesNuevas = array_diff($clientesNuevos, $clientesActuales);
        $asignacionesDesactivadas = array_diff($clientesActuales, $clientesNuevos);
        
        //Creamos cada nueva asignación que no estaba creada
        foreach($asignacionesNuevas as $clienteId)
        {
            Asignacion::create([
                'clienteId' => $clienteId,
                'operarioId' => $operario->id,
                'fechaAsignacion' => Carbon::now()->toDateTimeString(),
                'fechaInicio' => Carbon::now()->toDateTimeString(),
                'fechaFinal' => null,
                'activo' => 1
            ]);
        }

        //Desactivamos la asignación de los que no están en los asignados actuales
        foreach($asignacionesDesactivadas as $clienteId)
        {
            $asignacion = Asignacion::where('clienteId', $clienteId)->where('operarioId', $operario->id)->where('activo', 1)->first();
            $asignacion->activo = 0;
            $asignacion->fechaFinal = Carbon::now()->toDateTimeString();
            $asignacion->save();
        }
        return redirect()->route('intranet.operarios.edit', $id)->withSuccess('Operario editado correctamente.');
    }

    public function destroy($id)
    {
        $operario = Usuario::where('id',$id)->first();
        if(count($operario->asignaciones)>0)
        {
            $activo = 0;
            foreach($operario->asignaciones as $asignacion)
            {
                if($asignacion->activo == 1)
                {
                    $activo = 1;
                }
            }
            if($activo == 0)
            {
                $operario->activo = 0;
                $operario->save();
            }
            else
            {
                return redirect()->back()->withErrors('No se ha podido borrar el operario. Tiene clientes asignados.');
            }
        }
        $operario->activo = 0;
        $operario->save();
        return redirect()->route('intranet.operarios.index');
    }
}
