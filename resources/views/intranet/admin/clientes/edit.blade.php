@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="clientes-edit">
        <div class="title">{{ $cliente->nombre }}</div>
        <div class="description">{{ 'Edita los datos del cliente ' . $cliente->nombre }}</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.clientes.update', $cliente->id) }}">
            @csrf
            <div class="form-row-multiple">
                <div class="form-w1">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" placeholder="Código" value="{{ $cliente->codigo }}">
                </div>
                <div class="form-w8">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required placeholder="Nombre" value="{{ $cliente->nombre }}">
                </div>
                <div class="form-w1 form-check form-center">
                    <label for="material">Material</label>
                    <input type="checkbox" name="material" {{ $cliente->material ? 'checked' : '' }}>
                </div>
            </div>
            <div class="form-row">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" placeholder="Dirección" value="{{ $cliente->direccion }}">
            </div>
            <div class="form-row">
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion" placeholder="Población" value="{{ $cliente->poblacion }}">
            </div>
            <div class="form-row">
                <label for="observaciones">Observaciones</label>
                <textarea name="observaciones">{{ $cliente->observaciones }}</textarea>
            </div>
            <div class="form-row">
                <label for="observaciones">Operario/s asignado/s</label>
                <div class="form-selection">
                @foreach($operarios as $operario)
                    <div class="form-selection-item">
                        @php($asignado = false)
                        @foreach($cliente->asignaciones as $asignacion)
                            @if($asignacion->operarioId == $operario->id && $asignacion->activo == 1)
                                @php($asignado = true)
                            @endif
                        @endforeach
                        <input id="operario{{ $operario->id }}" type="checkbox" name="operarios[]" value="{{ $operario->id }}" @if($asignado == true) checked @endif/>
                        <div>{{ $operario->nombre }}</div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="form-row">
                <label>Historial de Operarios asignados</label>
                <ul class="form-historial">
                @foreach($cliente->asignaciones->sortBy([['activo','desc'],['fechaAsignacion','asc']]) as $asignacion) 
                    <li><i class="bi bi-person-fill"></i>{{ $asignacion->operario->nombre }} <i class="fechas">({{ date('d/m/Y', strtotime($asignacion->fechaInicio)) }} - {{ $asignacion->fechaFinal != null ? date('d/m/Y', strtotime($asignacion->fechaFinal)) : 'Actualmente en curso' }})</i></li>
                @endforeach
                </ul>
            </div>
            <div class="form-row">
                <label>Fecha de creación</label>
                <input type="text" disabled value="{{ $cliente->fechaCreacion }}">
            </div>
            <div class="form-row">
                <label>Fecha de la última edición</label>
                <input type="text" disabled value="{{ $cliente->ultimaEdicion }}">
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.clientes.destroy', $cliente->id) }}" class="button-ko">Eliminar</a>
                <a href="{{ route('intranet.clientes.index') }}" class="button-ko">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection