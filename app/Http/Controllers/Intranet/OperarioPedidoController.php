<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Asignacion;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Articulo;
use App\Models\PedidoArticulo;

class OperarioPedidoController extends Controller
{
    public function index()
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $diaFinalMes = getFechaFinalTramoActual();
        return view('intranet/operario/pedidos/index', [
            'diaInicioMes' => $diaInicioMes,
            'diaFinalMes' => $diaFinalMes,
            'nombreMes' => Carbon::parse($diaInicioMes)->isoFormat('DD MMMM YYYY'),
            'usuario' => Auth::user(),
        ]);
    }
    
    public function edit($id)
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $asignacion = Asignacion::where('id', $id)->where('activo', 1)->first();
        $cliente = Cliente::where('id', $asignacion->clienteId)->where('activo',1)->first();

        if($asignacion != null && $cliente != null)
        {
            $pedido = Pedido::where('clienteId', $cliente->id)
            ->where('fechaInicioTramo','<=',Carbon::now())
            ->where('fechaFinalTramo','>',Carbon::now())
            ->first();

            $articulos = Articulo::where('activo', 1)->orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
            if($pedido == null)
            {
                //El pedido es la primera vez que se registra
                return view ('intranet/operario/pedidos/edit',[
                    'nombreMes' => Carbon::parse($diaInicioMes)->isoFormat('DD MMMM YYYY'),
                    'asignacion' => $asignacion,
                    'cliente' => $cliente,
                    'registrado' => false,
                    'pedido' => null,
                    'usuario' => Auth::user(),
                    'articulos' => $articulos,
                ]);
            }
            else
            {
                //El pedido ya existía, edición del pedido
                return view ('intranet/operario/pedidos/edit',[
                    'nombreMes' => Carbon::parse($diaInicioMes)->isoFormat('DD MMMM YYYY'),
                    'asignacion' => $asignacion,
                    'cliente' => $cliente,
                    'registrado' => true,
                    'pedido' => $pedido,
                    'usuario' => Auth::user(),
                    'articulos' => $articulos,
                ]);
            }
        }
        return redirect()->route('intranet.login');
    }

    public function update(Request $request)
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $diaFinalMes = getFechaFinalTramoActual();

        //Ver si el pedido ya existe (tiene pedidoId)
        $pedido = Pedido::whereId($request->pedidoId)->first();

        if($pedido != null)
        {
            $pedido->ultimaModificacion = Carbon::now();
            $pedido->nota = $request->nota;
            $pedido->save();
        }
        else
        {
            //Comprobar que no haya pedido / cliente / tramo repetido
            $pedidoRepetido = Pedido::where('fechaInicioTramo', $diaInicioMes)->where('clienteId', $request->clienteId)->first();
                    
            if($pedidoRepetido == null)
            {
                $pedido = Pedido::create([
                    'clienteId' => $request->clienteId,
                    'nota' => $request->nota,
                    'fechaInicioTramo' => $diaInicioMes,
                    'fechaFinalTramo' => $diaFinalMes,
                    'ultimaModificacion' => Carbon::now()
                ]);
            }
            else
            {
                dd("Ya existe un pedido para este cliente en este tramo de fechas. Contacta con el administrador.");
            }
        }

        
        $pedidoArticulos = PedidoArticulo::where('pedidoId', $pedido->id)->get();
        foreach($pedidoArticulos as $pedidoArticulo)
        {
            $pedidoArticulo->delete();
        }
        if($request->has('articulos'))
        {
            foreach($request->articulos as $key => $value)
            {
                PedidoArticulo::create([
                    'pedidoId' => $pedido->id,
                    'articuloId' => $key,
                    'cantidad' => $value != null ? $value : 0
                ]);
            }
        }
        return redirect()->route('intranet.operario-pedido.index');
    }
}
