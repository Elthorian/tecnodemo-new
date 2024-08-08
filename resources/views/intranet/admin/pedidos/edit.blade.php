@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="pedidos-edit">
        <div class="title">{{ $pedido->cliente->nombre }} pedido de {{ Str::upper($nombreMes) }}</div>
        <div class="description">Edita los datos del pedido {{ $pedido->cliente->nombre }} de {{ Str::upper($nombreMes) }}</div>
        @include('intranet.layouts.status')
        <form method="post" action="{{ route('intranet.pedidos.update', $pedido->id) }}">
            @csrf
            <div class="form-row">
                <label for="cliente">Cliente</label>
                <select required name="clienteId" disabled>
                    @foreach($clientes as $cliente)
                        <option {{ $pedido->cliente->id == $cliente->id ? 'selected' : '' }} value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="mes">Fecha inicio</label>
                <select required name="mes" disabled>
                    @foreach($meses as $i => $mes)
                        <option {{ $i == Carbon\Carbon::parse($pedido->fechaInicioTramo)->month ? 'selected' : '' }} value="{{ $i }}">{{ $mes }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="anyo">Año</label>
                <select required name="anyo" disabled>
                    @foreach($anyos as $key => $value)
                        <option {{ $value == Carbon\Carbon::parse($pedido->fechaInicioTramo)->year ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="articulo">Artículos</label>
                <div class="articulos">
                    @foreach($articulos as $articulo)
                    <div class="articulo">
                        @php($valor = 0)
                        @foreach($pedido->pedidoArticulos as $pedidoArticulo)
                            @if($pedidoArticulo->articulo->id == $articulo->id)
                                @php($valor = $pedidoArticulo->cantidad)
                                @break
                            @endif
                        @endforeach
                        <input min="0" type="number" name="articulos[{{ $articulo->id }}]" value="{{ $valor }}">
                        <div><b>{{ $articulo->codigo }}</b>. {{ $articulo->nombre }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-row">
                <label for="fecha">Notas</label>
                <textarea placeholder="" name="nota">{{ $pedido->nota }}</textarea>
            </div>
            <div class="form-buttons">
                <a class="button-ko" href="{{ route('intranet.pedidos.index') }}">Atrás</a>
                <a class="button-ko" href="{{ route('intranet.pedidos.destroy', $pedido->id) }}">Eliminar</a>
                <input class="button-ok" type="submit" value="Guardar">
            </div>
        </form>
    </div>
@endsection