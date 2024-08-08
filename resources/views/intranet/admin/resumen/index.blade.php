@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="resumen-index">
        <div class="title">Resumen</div>
        <div class="description">Aquí tienes el resumen de los pedidos, albaranes y cantidades totales.</div>
        <div class="header-menu">
            <form method="post" action="{{ route('intranet.resumen.search') }}" style="flex-direction:row;column-gap:10px;flex-wrap:wrap;">
                @csrf
                <div>
                    <label for="mes">Fecha inicio</label>
                    <select required name="mes" style="font-size:14px;">
                        <option disabled selected value> -- Selecciona un mes -- </option>
                        @foreach($meses as $key => $value)
                            <option {{ $key == $diaInicio->month ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="anyo">Año</label>
                    <select required name="anyo" style="font-size:14px;">
                        <option disabled selected value> -- Selecciona un año -- </option>
                        @foreach($anyos as $key => $value)
                            <option {{ $key == $diaInicio->year ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div style="display:flex;column-gap:10px;">
                    <button style="padding:6px 20px;font-size:90%;" class="button-ok">Buscar</button>
                    <div>
                        <a target="_blank" href="{{ route('intranet.resumen.downloadAlbaranes', $diaInicio) }}" style="padding:6px 20px; height:36px;font-size:90%;" class="button-ok">Albaranes</a>
                        <!---a target=”_blank” href="{{ route('intranet.resumen.downloadResumen', $diaInicio) }}" style="padding:6px 20px;font-size:90%;" class="button-ok">Descargar resumen</a--->
                    </div>
                </div>
            </form>
        </div>
        <div class="content-index">
            <div style="display:flex; flex-wrap:wrap; justify-content:space-between;margin-top:15px; column-gap:10px;">
                <div>
                    <table>
                        <tr>
                            <th style="padding-left:0px; padding-right:0px;" colspan="3">Recuento de artículos de {{ $diaInicio->isoFormat('DD/MM/YYYY') }} a {{ $diaFinal->isoFormat('DD/MM/YYYY') }}</th>
                        </tr>
                        <tr>
                            <th class="center">Código</th>
                            <th>Artículo</th>
                            <th class="center">Cantidad</th>
                        </tr>
                        @foreach($articulos as $articulo)
                            <tr>
                                <td class="center">{{ str_pad($articulo->codigo, 3, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $articulo->nombre }}</td>
                                @php($contador = 0)
                                @foreach($pedidos as $pedido)
                                    @foreach($pedido->pedidoArticulos as $pedidoArticulo)
                                        @if($pedidoArticulo->articulo->id == $articulo->id && $pedidoArticulo->cantidad > 0)
                                            @php($contador = $contador + $pedidoArticulo->cantidad) 
                                        @endif
                                    @endforeach
                                @endforeach
                                <td class="center">{{ $contador }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div>
                    <table>
                        <tr>
                            <th style="padding-left:0px; padding-right:0px;" colspan="3">Clientes con pedido de {{ $diaInicio->isoFormat('DD/MM/YYYY') }} a {{ $diaFinal->isoFormat('DD/MM/YYYY') }}</th>
                        </tr>
                        <tr>
                            <th>Cliente</th>
                            <th class="center">Ttl. Artículos</th>
                            <th class="center">Ult. Actualización</th>
                        </tr>
                        @foreach($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->cliente->nombre }}</td>
                                @php($totalProductos = 0)
                                @foreach($pedido->pedidoArticulos as $pedidoArticulo)
                                    @php($totalProductos += $pedidoArticulo->cantidad) 
                                @endforeach
                                <td class="center">{{ $totalProductos }}</td>
                                <td class="center">{{ $pedido->ultimaModificacion }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection