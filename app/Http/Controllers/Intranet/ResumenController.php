<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pedido;
use App\Models\Articulo;

class ResumenController extends Controller
{
    public function index()
    {
        $diaInicioActual = getFechaInicioTramoActual();
        $mesSeleccionado = $diaInicioActual->month;
        $anyoSeleccionado = $diaInicioActual->year;
        $diaInicio = Carbon::now()->startOfDay()->year($anyoSeleccionado)->month($mesSeleccionado)->day(21);
        $diaFinal = getFechaFinalTramo($diaInicio);
        $articulos = Articulo::where('activo', 1)->orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
        $pedidos = Pedido::where('fechaInicioTramo', $diaInicio)->get();
        $meses = getMeses();
        $anyos = getAnyos();
        return view('intranet/admin/resumen/index', [
            'meses' => $meses,
            'anyos' => $anyos,
            'diaInicio' => $diaInicio,
            'diaFinal' => $diaFinal,
            'pedidos' => $pedidos,
            'articulos' => $articulos,
        ]);
    }

    public function search(Request $request)
    {
        $diaInicioActual = getFechaInicioTramoActual();
        $mesSeleccionado = $request->has('mes') ? $request->mes : $diaInicioActual->month;
        $anyoSeleccionado = $request->has('anyo') ? $request->anyo : $diaInicioActual->year;
        $diaInicio = Carbon::now()->startOfDay()->year($anyoSeleccionado)->month($mesSeleccionado)->day(21);
        $diaFinal = getFechaFinalTramo($diaInicio);
        $articulos = Articulo::where('activo', 1)->orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
        $pedidos = Pedido::where('fechaInicioTramo', $diaInicio)->get();
        $meses = getMeses();
        $anyos = getAnyos();
        return view('intranet/admin/resumen/index', [
            'meses' => $meses,
            'anyos' => $anyos,
            'diaInicio' => $diaInicio,
            'diaFinal' => $diaFinal,
            'pedidos' => $pedidos,
            'articulos' => $articulos,
        ]);
    }

    public function downloadResumen($diaInicio)
    {
        
    }

    public function downloadAlbaranes($diaInicio)
    {
        $pedidos = Pedido::where('fechaInicioTramo', $diaInicio)->get();
        return view('intranet/admin/resumen/albaranes', [
            'pedidos' => $pedidos,
        ]);
    }

}