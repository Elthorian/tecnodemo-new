@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="clientes-create">
        <div class="title">Crear nuevo cliente</div>
        <div class="description">Llena los datos para crear a un nuevo cliente</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.clientes.store') }}">
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
                    <label for="material">Material</label>
                    <input type="checkbox" class="chck-material" name="material" checked>
                </div>
            </div>
            <div class="form-row">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" placeholder="Dirección" value="">
            </div>
            <div class="form-row">
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion" placeholder="Población" value="">
            </div>
            <div class="form-row">
                <label for="observaciones">Observaciones</label>
                <textarea name="observaciones"></textarea>
            </div>
            <div class="form-row">
                <label for="observaciones">Operario/s asignado/s</label>
                <div class="form-selection">
                @foreach($operarios as $operario)
                    <div class="form-selection-item">
                        <input id="operario{{ $operario->id }}" type="checkbox" name="operarios[]" value="{{ $operario->id }}"/>
                        <div>{{ $operario->nombre }}</div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.clientes.index') }}" class="button-ko">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection