@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="pedidos-index">
        <div class="title">Pedidos</div>
        <div class="description">Visualiza, crea, edita los pedidos de los clientes</div>
        <div class="header-menu">
            <form method="post" action="{{ route('intranet.pedidos.search') }}" style="flex-direction:row;column-gap:5px;flex-wrap:wrap;">
                @csrf
                <a class="button-create" href="{{ route('intranet.pedidos.create') }}"><i class="bi bi-plus-lg"></i></a>
                <select name="clienteId" style="font-size: 14px;">
                    <option selected disabled>Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->codigo }}. {{ $cliente->nombre }}</option>
                    @endforeach
                </select>
                <select name="fechaInicioTramo" style="font-size: 14px;">
                    <option selected disabled>Tramo</option>
                    @foreach($tramos as $tramo)
                        <option value="{{ $tramo->fechaInicioTramo }}">{{ \Carbon\Carbon::parse($tramo->fechaInicioTramo)->isoFormat('DD/MM/YY') }} - {{ \Carbon\Carbon::parse($tramo->fechaFinalTramo)->isoFormat('DD/MM/YY') }}</option>
                    @endforeach
                </select>
                <button style="display:flex;justify-content:center;" class="button-search" href="{{ route('intranet.pedidos.search') }}"><i style="padding-right:0px;margin-left:0px;margin-right:0px;" class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="content-index">
            <div class="resultados-encontrados"><div id="encontrados">{{ count($pedidos) }}</div> resultados encontrados</div>
            <table id="tablaPedidos" class="table-data">
                <tr class="table-data-header">
                    <th class="cliente">Cliente</th>
                    <th class="fecha">Tramo fechas</th>
                    <th class="articulos center">Artículos</th>
                    <th class="ultimoInforme center">Último informe</th>
                </tr>
                @foreach($pedidos as $pedido)
                    <tr class="clickable-row" data-href="{{ route('intranet.pedidos.edit', $pedido->id) }}">
                    <td class="cliente"><i class="bi bi-bag"></i><b>{{ $pedido->cliente->codigo }}. {{ $pedido->cliente->nombre }}</b></td>
                    <td class="fecha" style="text-transform:capitalize">{{ \Carbon\Carbon::parse($pedido->fechaInicioTramo)->isoFormat('DD/MM/YY') }} - {{ \Carbon\Carbon::parse($pedido->fechaFinalTramo)->isoFormat('DD/MM/YY') }}</td>
                    <td class="articulos center">{{ count($pedido->pedidoArticulos->where('cantidad','>',0)) }}</td>
                    <td class="ultimoInforme center">{{ \Carbon\Carbon::parse($pedido->ultimaModificacion)->isoFormat('DD/MM/YY') }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="{{ asset('js/intranet/pedidos/pedidos.js') }}"></script>
@endsection