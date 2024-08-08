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
    <body id="tecnodemo-intranet" >
        <main class="main">
            <aside class="sidebar">
                <nav class="nav">
                    <ul>
                        <li class="{{ Request::is('intranet/resumen') || Request::is('intranet/resumen/buscar') ? 'active' : '' }}"><a href="{{ route('intranet.resumen.index') }}"><span class="icon"><i class="bi bi-bag"></i></span><span class="tag-resumen">Resumen</span></a></li>
                        <li class="{{ Request::is('intranet/pedidos') ? 'active' : '' }}"><a href="{{ route('intranet.pedidos.index') }}"><span class="icon"><i class="bi bi-bag"></i></span><span class="tag-pedidos">Pedidos</span></a></li>
                        <li class="{{ Request::is('intranet/clientes') ? 'active' : '' }}"><a href="{{ route('intranet.clientes.index') }}"><span class="icon"><i class="bi bi-briefcase"></i></span><span class="tag-clientes">Clientes</span></a></li>
                        <li class="{{ Request::is('intranet/operarios') ? 'active' : '' }}"><a href="{{ route('intranet.operarios.index') }}"><span class="icon"><i class="bi bi-person"></i></span><span class="tag-operarios">Operarios</span></a></li>
                        <li class="{{ Request::is('intranet/articulos') ? 'active' : '' }}"><a href="{{ route('intranet.articulos.index') }}"><span class="icon"><i class="bi bi-box-seam"></i></span><span class="tag-articulos">Artículos</span></a></li>
                        <li class="{{ Request::is('intranet/logout') ? 'active' : '' }}"><a href="{{ route('intranet.logout') }}"><span class="icon"><i class="bi bi-door-closed"></i></span><span class="tag-salir">Salir</span></a></li>
                    </ul>
                </nav>
            </aside>
            <section class="section">
                <div class="section-header">
                    <div class="logo"></div>
                </div>
                <div class="section-content">
                    @yield('intranet-section')
                </div>
            </section>
        </main>
    </body>
</html>