@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="operarios">
        <div class="title">{{ $operario->nombre }}</div>
        <div class="description">Edita los datos del operario {{ $operario->nombre }}</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.operarios.update', $operario->id) }}">
            @csrf
            <div class="form-row">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" value="{{ $operario->nombre }}">
            </div>
            <div class="form-row">
                <label for="direccion">Teléfono</label>
                <input type="text" name="telefono" placeholder="Teléfono" value="{{ $operario->telefono }}">
            </div>
            <div class="form-row">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" value="{{ $operario->email }}">
            </div>
            <div class="form-row">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario" value="{{ $operario->usuario }}">
            </div>
            <div class="form-row">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" value="">
            </div>
            <div class="form-row">
                <label for="observaciones">Cliente/s asignado/s</label>
                <div class="form-selection">
                @foreach($clientes as $cliente)
                    <div class="form-selection-item">
                        @php($asignado = false)
                        @foreach($operario->asignaciones as $asignacion)
                            @if($asignacion->clienteId == $cliente->id && $asignacion->activo == 1)
                                @php($asignado = true)
                            @endif
                        @endforeach
                        <input id="cliente{{ $cliente->id }}" type="checkbox" name="clientes[]" value="{{ $cliente->id }}" @if($asignado == true) checked @endif/>
                        <div>{{ $cliente->nombre }}</div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="form-row">
                <label>Fecha de creación</label>
                <input type="text" disabled value="{{ $operario->fechaCreacion }}">
            </div>
            <div class="form-row">
                <label>Fecha de la última edición</label>
                <input type="text" disabled value="{{ $operario->ultimaEdicion }}">
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.operarios.destroy', $operario->id) }}" class="button-ko">Eliminar</a>
                <a href="{{ route('intranet.operarios.index') }}" class="button-ko">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection