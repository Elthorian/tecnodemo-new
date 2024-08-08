@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="pedidos-create">
        <div class="title">Crear un nuevo pedido</div>
        <div class="description">Registra un pedido nuevo. Selecciona el cliente y las fechas.</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.pedidos.store') }}">
            @csrf
            <div class="form-row">
                <label for="clienteId">Cliente</label>
                <select required name="clienteId">
                    <option disabled selected value> -- Selecciona un cliente -- </option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="mes">Fecha inicio</label>
                <select required name="mes">
                    <option disabled selected value> -- Selecciona un mes -- </option>
                    @foreach($meses as $key => $value)
                        <option {{ $key == $diaInicioMes->month ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="anyo">Año</label>
                <select required name="anyo">
                    <option disabled selected value> -- Selecciona un año -- </option>
                    @foreach($anyos as $key => $value)
                        <option {{ $key == $diaInicioMes->year ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="fecha">Artículos</label>
                <div class="articulos">
                    @foreach($articulos as $articulo)
                    <div class="articulo">
                        <input min="0" type="number" name="articulos[{{ $articulo->id }}]" value="0">
                        <div><b>{{ str_pad($articulo->codigo, 3, '0', STR_PAD_LEFT) }}</b>. {{ $articulo->nombre }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-row">
                <label for="fecha">Notas</label>
                <textarea placeholder="" name="nota"></textarea>
            </div>
            <div class="form-buttons">
                <a class="button-ko" href="{{ route('intranet.pedidos.index') }}">Cancelar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection