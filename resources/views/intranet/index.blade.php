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
        <link rel="stylesheet" href="{{ asset('css/intranet/intranet.css') }}">
    </head>
    <body id="tecnodemo-intranet">
        <section class="login-section">
            <div class="login-div">
                <div class="login-div-1">
                    <div class="logo"></div>
                    <form method="post" action="{{ route('intranet.login') }}">
                        @csrf
                        <div class="inicia-sesion">Inicia sesión con tu cuenta</div>
                        <div class="inp-div">
                            <div class="inp-icon"><i class="bi bi-person-fill"></i></div>
                            <input type="text" placeholder="Nombre de usuario" name="usuario"/>
                        </div>
                        <div class="inp-div">
                            <div class="inp-icon"><i class='bi bi-lock-fill'></i></div>
                            <input type="password" placeholder="Contraseña" name="password"/>
                        </div>
                        <div class="inp-div">
                            <input type="submit" class="button-ok" value="Iniciar sesión"/>
                        </div>
                    </form>
                </div>
                <div class="login-div-2">
                    <div class="login-info">Informa pedidos de clientes</div>
                    <div class="login-info-descripcion">Entra con tu usuario y contraseña. Crea y modifica los pedidos de los clientes de cada mes y dejalos registrados. Gestiona los pedidos de todos tus clientes asignados fácilmente.</div>
                </div>
            </div>
        </section>
    </body>
</html>