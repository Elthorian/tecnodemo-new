<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Articulo;
use App\Models\PedidoArticulo;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('activo',1)->get();
        $tramos = DB::table('pedidos')->select('fechaInicioTramo','fechaFinalTramo')->distinct()->get();
        $pedidos = Pedido::orderBy('fechaInicioTramo','desc')->get();
        return view('intranet/admin/pedidos/index', [
            'pedidos' => $pedidos,
            'tramos' => $tramos,
            'clientes' => $clientes,
        ]);
    }

    public function search(Request $request)
    {
        $query = Pedido::query();
        if($request->has('clienteId'))
        {
            $query = $query->where('clienteId', $request->clienteId);
        }
        if($request->has('fechaInicioTramo'))
        {
            $query = $query->where('fechaInicioTramo', $request->fechaInicioTramo);
        }
        $query = $query->orderBy('fechaInicioTramo','desc');
        $pedidos = $query->get();
        $tramos = DB::table('pedidos')->select('fechaInicioTramo','fechaFinalTramo')->distinct()->get();
        $clientes = Cliente::where('activo',1)->get();
        return view('intranet/admin/pedidos/index', [
            'pedidos' => $pedidos,
            'tramos' => $tramos,
            'clientes' => $clientes,
        ]);
    }

    public function create()
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $clientes = Cliente::where('activo', 1)->get();
        $articulos = Articulo::where('activo', 1)->orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
        return view('intranet/admin/pedidos/create', [
            'clientes' => $clientes,
            'diaInicioMes' => $diaInicioMes,
            'articulos' => $articulos,
            'meses' => getMeses(),
            'anyos' => getAnyos(),
        ]);
    }

    public function store(Request $request)
    {
        $fechaInicioTramo = getFechaInicioTramoActual()->month($request->mes)->year($request->anyo);
        $fechaFinalTramo = getFechaFinalTramo($fechaInicioTramo);
        $pedidoSimilar = Pedido::whereDate('fechaInicioTramo', '=', $fechaInicioTramo)->where('clienteId', $request->clienteId)->first();
        if($pedidoSimilar != null)
        {
            return redirect()->back()->withErrors('No se ha podido borrar el pedido. Ya existe un pedido similar para este cliente con esas fechas.');
        }
        $pedido = Pedido::create([
            'clienteId' => $request->clienteId,
            'fechaInicioTramo' => $fechaInicioTramo->toDateTimeString(),
            'fechaFinalTramo' => $fechaFinalTramo->toDateTimeString(),
            'nota' => $request->nota,
            'ultimaModificacion' => Carbon::now()->toDateTimeString(),
        ]);
        if($request->has('articulos'))
        {
            foreach($request->articulos as $key => $value)
            {
                PedidoArticulo::create([
                    'pedidoId' => $pedido->id,
                    'articuloId' => $key,
                    'cantidad' => $value,
                ]);
            }
        }
        return redirect()->route('intranet.pedidos.edit', $pedido->id)->withSuccess('Pedido creado correctamente.');
    }

    public function edit($id)
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $pedido = Pedido::whereId($id)->first();
        $clientes = Cliente::where('activo', 1)->get();
        $articulos = Articulo::where('activo', 1)->orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
        return view('intranet/admin/pedidos/edit', [
            'clientes' => $clientes,
            'diaInicioMes' => $diaInicioMes,
            'pedido' => $pedido,
            'nombreMes' => Carbon::parse($diaInicioMes)->isoFormat('DD MMMM [de] YYYY'),
            'articulos' => $articulos,
            'meses' => getMeses(),
            'anyos' => getAnyos(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::whereId($request->id)->first();
        $pedido->update([
            'nota' => $request->nota,
            'ultimaModificacion' => Carbon::now()->toDateTimeString(),
        ]);
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
                    'cantidad' => $value,
                ]);
            }
        }
        return redirect()->route('intranet.pedidos.edit', $id)->withSuccess('Pedido editado correctamente.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::whereId($id)->first();
        foreach($pedido->pedidoArticulos as $pedidoArticulo)
        {
            $pedidoArticulo->delete();
        }
        $pedido->delete();
        return redirect()->route('intranet.pedidos.index');
    }
}
