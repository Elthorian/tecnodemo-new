<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pedido de {{ $cliente->nombre }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/intranet/intranet.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body id="tecnodemo-intranet">
        <div id="wraper-cliente-operarios" class="wraper">
            <header>
                <div class="header">
                    <img class="logo" src="{{ asset('images/tecnodemo-simple-logo.png') }}">
                    <div class="title">Informa los pedidos de tus clientes</div>
                    <div class="nombre-operario"><span>{{ $usuario->nombre }}</span><a style="color:white;" href="{{ route('intranet.logout') }}"><i class="bi bi-door-closed"></i></a></div>
                </div>
            </header>
            <content>
                <div class="sub-title rojo" style="margin-bottom:0px;margin-top:25px;">{{ $cliente->nombre }}</div>
                <div class="sub-title" style="margin-top:0px;margin-bottom:20px;">Pedido {{ $nombreMes }}</div>
                <div class="pedidos-productos">
                    <form method="post" action="{{ route('intranet.operario-pedido.update', $asignacion->id) }}">
                        @csrf
                        <input type="hidden" name="pedidoId" value="{{ $registrado ? $pedido->id : 0 }}">
                        <input type="hidden" name="clienteId" value="{{ $cliente->id }}">
                        @foreach($articulos as $articulo)
                            <div class="articulo">
                                @php($valor = 0)
                                @if($registrado)
                                    @foreach($pedido->pedidoArticulos as $pedidoArticulo)
                                        @if($pedidoArticulo->articulo->id == $articulo->id)
                                            @php($valor = $pedidoArticulo->cantidad)
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                                <input min="0" type="number" name="articulos[{{ $articulo->id }}]" value="{{ $valor }}">
                                <label>{{ $articulo->codigo }}. {{ $articulo->nombre }}</label>
                            </div>
                        @endforeach
                        <div style="margin-top:20px;">
                            <textarea class="notas-pedido" placeholder="Notas" name="nota">{{ $registrado ? $pedido->nota : '' }}</textarea>
                        </div>
                        <div class="edit-pedido-buttons">
                            <a class="button-ko" href="{{ route('intranet.operario-pedido.index') }}">Atrás</a>
                            <input class="button-ok" type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </content>
        </div>
    </body>
</html>