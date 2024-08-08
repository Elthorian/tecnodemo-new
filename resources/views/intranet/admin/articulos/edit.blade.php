@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="articulos">
        <div class="title">{{ $articulo->nombre }}</div>
        <div class="description">Edita los datos del articulo {{ $articulo->nombre }}</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.articulos.update', $articulo->id) }}">
            @csrf
            <div class="form-row-multiple">
                <div class="form-w1">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" placeholder="Código" value="{{ $articulo->codigo }}">
                </div>
                <div class="form-w8">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required placeholder="Nombre" value="{{ $articulo->nombre }}">
                </div>
                <div class="form-w1 form-check form-center">
                    <label for="activo">Activo</label>
                    <input type="checkbox" class="chck-material" name="activo" {{ $articulo->activo ? 'checked' : '' }}>
                </div>
            </div>
            <div class="form-row">
                <label>Fecha de creación</label>
                <input type="text" disabled value="{{ $articulo->fechaCreacion }}">
            </div>
            <div class="form-row">
                <label>Fecha de la última edición</label>
                <input type="text" disabled value="{{ $articulo->ultimaEdicion }}">
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.articulos.index') }}" class="button-ko">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection