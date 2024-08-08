<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tecnodemo Iberica - Intranet</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/intranet/intranet.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body id="tecnodemo-intranet">
        <div class="resumen-albaranes">
            @foreach($pedidos as $pedido)
            @php
                $num = $pedido->pedidoArticulos->where('cantidad','>',0)->count();
                if($num > 10){
                    $valor = 2;
                }else{
                    $valor = 1;
                }
            @endphp
            <div class="val{{$valor}} albaran">
                <table>
                    <tr>
                        <td colspan="2" rowspan="6">
                            <img src="{{ asset('images/tecnodemo-logo.png') }}">
                        </td>
                        <td class="w250">Albarán</td>
                        <td class="azul w500"></td>
                    </tr>
                    <tr>
                        <td class="w250">Cliente</td>
                        <td class="w500">{{ $pedido->cliente->nombre }}</td>
                    </tr>
                    <tr>
                        <td class="w250">Código</td>
                        <td class="azul w500">{{ $pedido->cliente->codigo }}</td>
                    </tr>
                    <tr>
                        <td class="w250">Domicilio</td>
                        <td class="w500">{{ $pedido->cliente->direccion }}</td>
                    </tr>
                    <tr>
                        <td class="w250">Población</td>
                        <td class="w500">{{ $pedido->cliente->poblacion }}</td>
                    </tr>
                    <tr>
                        <td class="w250">Trabajador</td>
                        @if(count($pedido->cliente->asignaciones)>0)
                            <td class="w500">{{ $pedido->cliente->asignaciones[0]->operario->nombre }}</td>
                        @else
                            <td class="w500">ERROR</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="txtcabecera wbold">Código</td>
                        <td class="txtcabecera wbold">Cantidad</td>
                        <td class="txtcabecera wbold" colspan="2">Referencia - Artículo</td>
                    </tr>
                    @foreach($pedido->pedidoArticulos as $pedidoArticulo)
                        @if($pedidoArticulo->cantidad > 0)
                            <tr>
                                <td class="txtcenter">{{ $pedidoArticulo->articulo->codigo }}</td>
                                <td class="txtcenter">{{ $pedidoArticulo->cantidad }}</td>
                                <td class="txtcenter" colspan="2">{{ $pedidoArticulo->articulo->nombre }}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="4" style="color:red;font-weight:bold">NOTA:</td>
                    </tr>
                    <tr>
                        <td colspan="4">{{ $pedido->nota }}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </body>
</html>