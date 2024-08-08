<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clientes de {{ $usuario->nombre }}</title>
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
                <div class="mes-pedidos">Pedidos de {{ $nombreMes }}</div>
                <div class="clientes-operarios">
                @foreach($usuario->asignaciones as $asignacion)
                    @if($asignacion->activo && $asignacion->cliente->activo && $asignacion->cliente->material)
                    <a class="cliente-operario" href="{{ route('intranet.operario-pedido.edit', $asignacion->id) }}">
                        <div class="cabecera">
                            <div class="nombre">{{ $asignacion->cliente->nombre }}</div>
                        </div>
                        <div class="cuerpo">
                            <div class="codigo"><b>Código de cliente:</b> {{ $asignacion->cliente->codigo }}</div>
                            @if($asignacion->cliente->direccion != null)<div class="direccion"><b>Dirección:</b> {{ $asignacion->cliente->direccion }}</div>@endif
                            @if($asignacion->cliente->poblacion != null)<div class="poblacion"><b>Población:</b> {{ $asignacion->cliente->poblacion }}</div>@endif
                            @if($asignacion->pedidoActual($asignacion->cliente->id) != null)<div class="ult-vez"><b>Ultima modificación:</b> {{ $asignacion->pedidoActual($asignacion->cliente->id)->ultimaModificacion }}</div>@endif
                            @if($asignacion->observaciones != null)<div class="observaciones"><b>Observaciones:</b> {{ $asignacion->cliente->observaciones }}</div>@endif
                        </div>
                        <button>Informar pedido</button>
                    </a>
                    @endif
                @endforeach
                </div>
            </content>
        </div>
    </body>
</html>