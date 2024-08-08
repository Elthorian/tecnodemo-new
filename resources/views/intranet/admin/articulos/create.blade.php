@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="articulos">
        <div class="title">Crear nuevo articulo</div>
        <div class="description">Llena los datos para crear a un nuevo articulo</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.articulos.store') }}">
            @csrf
            <div class="form-row-multiple">
                <div class="form-w1">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" placeholder="Código" value="">
                </div>
                <div class="form-w8">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required placeholder="Nombre" value="">
                </div>
                <div class="form-w1 form-check form-center">
                    <label for="activo">Activo</label>
                    <input type="checkbox" class="chck-material" name="activo" checked>
                </div>
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.articulos.index') }}" class="button-ko">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection