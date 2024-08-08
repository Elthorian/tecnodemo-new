@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="articulos-index">
        <div class="title">Articulos</div>
        <div class="description">Visualiza, crea, edita y borra los datos de tus artículos</div>
        <div class="header-menu">
            <a class="button-search" href=""><i class="bi bi-search"></i></a>
            <input id="buscadorArticulos" class="buscador" type="text" name="search" placeholder="Busca un artículo...">
            <a class="button-create" href="{{ route('intranet.articulos.create') }}"><i class="bi bi-plus-lg"></i></a>
        </div>
        <div class="content-index">
            <div class="resultados-encontrados"><div id="encontrados">{{ count($articulos) }}</div> resultados encontrados</div>
            <table id="tablaArticulos" class="table-data">
                <tr class="table-data-header">
                    <th class="codigo">Artículo</th>
                    <th class="total-mes center">Total pedidos mes</th>
                    <th class="activo center">Activo</th>
                </tr>
                @foreach($articulos as $articulo)
                    <tr class="clickable-row" data-href="{{ route('intranet.articulos.edit', $articulo->id) }}">
                    <td class="codigo"><i class="bi bi-box-seam"></i>{{ str_pad($articulo->codigo, 3, '0', STR_PAD_LEFT) }}. {{ $articulo->nombre }}</td>
                    <td class="total-mes center" style="text-align:center;">{{ $articulo->totalPedidosMes() }}</td>
                    <td class="activo center">
                        @if ($articulo->activo)
                            <i class="bi bi-check2-circle"></i>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="{{ asset('js/intranet/articulos/articulos.js') }}"></script>
@endsection