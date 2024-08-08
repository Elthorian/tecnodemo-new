<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::orderByRaw('CONVERT(codigo, SIGNED) asc')->get();
        return view('intranet/admin/articulos/index', [
            'articulos' => $articulos,
        ]);
    }

    public function create()
    {
        return view('intranet/admin/articulos/create', []);
    }

    public function store(Request $request)
    {
        $articuloExistente = Articulo::where('codigo', $request->codigo)->first();
        if($articuloExistente != null)
        {
            return redirect()->route('intranet.articulos.create')->withErrors('El código de artículo ya está siendo utilizado.');
        }
        $articulo = Articulo::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'activo' => $request->has('activo') ? 1 : 0,
            'ultimaEdicion' => Carbon::now()->toDateTimeString(),
            'fechaCreacion' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect()->route('intranet.articulos.edit', $articulo->id)->withSuccess('Artículo creado correctamente.');
    }

    public function edit($id)
    {
        $articulo = Articulo::whereId($id)->first();
        return view('intranet/admin/articulos/edit', [
            'articulo' => $articulo,
        ]);
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::where('id', $request->id)->first();
        $articuloExistente = Articulo::where('codigo', $request->codigo)->first();
        if($articuloExistente != null && $articuloExistente->id != $articulo->id)
        {
            return redirect()->route('intranet.articulos.edit', $id)->withErrors('El código de artículo ya está siendo utilizado.');
        }
        $articulo->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'activo' => $request->has('activo') ? 1 : 0,
            'ultimaEdicion' => Carbon::now()->toDateTimeString()
        ]);
        return redirect()->route('intranet.articulos.edit', $id)->withSuccess('Artículo editado correctamente.');;
    }
}
