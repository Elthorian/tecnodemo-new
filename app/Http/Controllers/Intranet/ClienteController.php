<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Asignacion;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('activo', 1)->orderBy('codigo')->get();
        return view('intranet/admin/clientes/index', [
            'clientes' => $clientes,
        ]);
    }

    public function create()
    {
        $operarios = Usuario::where('rolId', 2)->where('activo', 1)->get();
        return view('intranet/admin/clientes/create', [
            'operarios' => $operarios,
        ]);
    }

    public function store(Request $request)
    {
        $clienteExistente = Cliente::where('codigo', $request->codigo)->first();
        if($clienteExistente != null)
        {
            return redirect()->back()->withErrors('El código de cliente ya está siendo utilizado.');
        }
        $cliente = Cliente::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'poblacion' => $request->poblacion,
            'observaciones' => $request->observaciones,
            'material' => $request->has('material') ? 1 : 0,
            'ultimaEdicion' => Carbon::now()->toDateTimeString(),
            'fechaCreacion' => Carbon::now()->toDateTimeString(),
        ]);
        $operariosNuevos = $request->operarios != null ? $request->operarios : [];
        foreach($operariosNuevos as $operarioId)
        {
            Asignacion::create([
                'clienteId' => $cliente->id,
                'operarioId' => $operarioId,
                'fechaAsignacion' => Carbon::now()->toDateTimeString(),
                'fechaInicio' => Carbon::now()->toDateTimeString(),
                'fechaFinal' => null,
                'activo' => 1,
            ]);
        }
        return redirect()->route('intranet.clientes.edit', $cliente->id)->withSuccess('Cliente creado correctamente.');
    }

    public function edit($id)
    {
        $cliente = Cliente::whereId($id)->first();
        return view('intranet/admin/clientes/edit', [
            'cliente' => $cliente,
            'operarios' => Usuario::where('rolId', 2)->where('activo', 1)->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::where('id', $id)->first();
        $clienteExistente = Cliente::where('codigo', $request->codigo)->first();
        if($clienteExistente != null && $clienteExistente->id != $cliente->id)
        {
            return redirect()->route('intranet.clientes.edit', $id)->withErrors('El código de cliente ya está siendo utilizado.');
        }
        $cliente->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'poblacion' => $request->poblacion,
            'observaciones' => $request->observaciones,
            'material' => $request->has('material') ? 1 : 0,
            'ultimaEdicion' => Carbon::now()->toDateTimeString()
        ]);

        $operariosNuevos = $request->operarios != null ? $request->operarios : [];
        $operariosActuales = [];
        foreach($cliente->Asignaciones as $asignacion)
        {
            if($asignacion->activo == 1)
            {
                $operariosActuales[] = $asignacion->operarioId;
            }
        }

        //Obtenemos las nuevas asignaciones comparando los 2 arrays (El de operarios asignados actuales con los que queremos asignar)
        $asignacionesNuevas = array_diff($operariosNuevos, $operariosActuales);
        $asignacionesDesactivadas = array_diff($operariosActuales, $operariosNuevos);
        
        //Creamos cada nueva asignación que no estaba creada
        foreach($asignacionesNuevas as $operarioId)
        {
            Asignacion::create([
                'clienteId' => $id,
                'operarioId' => $operarioId,
                'fechaAsignacion' => Carbon::now()->toDateTimeString(),
                'fechaInicio' => Carbon::now()->toDateTimeString(),
                'fechaFinal' => null,
                'activo' => 1
            ]);
        }

        //Desactivamos la asignación de los que no están en los asignados actuales
        foreach($asignacionesDesactivadas as $operarioId)
        {
            $asignacion = Asignacion::where('clienteId', $id)->where('operarioId', $operarioId)->where('activo', 1)->first();
            $asignacion->activo = 0;
            $asignacion->fechaFinal = Carbon::now()->toDateTimeString();
            $asignacion->save();
        }
        return redirect()->route('intranet.clientes.edit', $id)->withSuccess('Cliente editado correctamente.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::where('id',$id)->first();
        if(count($cliente->asignaciones)>0)
        {
            $activo = 0;
            foreach($cliente->asignaciones as $asignacion)
            {
                if($asignacion->activo == 1)
                {
                    $activo = 1;
                }
            }
            if($activo == 0)
            {
                $cliente->activo = 0;
                $cliente->save();
            }
            else
            {
                return redirect()->back()->withErrors('No se ha podido borrar el cliente. Tiene operarios asignados.');
            }
        }
        $cliente->activo = 0;
        $cliente->save();
        return redirect()->route('intranet.clientes.index');
    }
}
