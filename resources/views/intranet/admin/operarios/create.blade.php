@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="operarios">
        <div class="title">Crear nuevo Operario</div>
        <div class="description">Llena los datos para crear a un nuevo operario</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.operarios.store') }}">
            @csrf
            <div class="form-row">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" value="">
            </div>
            <div class="form-row">
                <label for="direccion">Teléfono</label>
                <input type="text" name="telefono" placeholder="Teléfono" value="">
            </div>
            <div class="form-row">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" value="">
            </div>
            <div class="form-row">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario" value="">
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
                        <input id="cliente{{ $cliente->id }}" type="checkbox" name="clientes[]" value="{{ $cliente->id }}"/>
                        <div>{{ $cliente->nombre }}</div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="form-buttons">
                <a href="{{ route('intranet.operarios.index') }}" class="button-3">Cancelar</a>
                <input class="button-1" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection