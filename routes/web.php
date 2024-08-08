<?php

use Illuminate\Support\Facades\Route;
use \Spatie\Honeypot\ProtectAgainstSpam;

//Web page controllers
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\AvisoLegalController;

//Intranet admin controllers
use App\Http\Middleware\CheckLoggedAdmin;
use App\Http\Controllers\Intranet\LoginController;
use App\Http\Controllers\Intranet\ResumenController;
use App\Http\Controllers\Intranet\PedidosController;
use App\Http\Controllers\Intranet\ClienteController;
use App\Http\Controllers\Intranet\OperarioController;
use App\Http\Controllers\Intranet\ArticuloController;

//Intranet operarios controllers
use App\Http\Middleware\CheckLoggedOperario;
use App\Http\Controllers\Intranet\OperarioPedidoController;

//RUTAS TECNODEWMO

    //INICIO
    Route::get('/', [InicioController::class, 'index'])->name('inicio');

    //SERVICIOS
    Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

    //CONTACTO
    Route::post('/contacto/enviar-mail', [ContactoController::class, 'enviarMail'])->name('contacto.enviarMail')->middleware(ProtectAgainstSpam::class);

    //BLOG
    Route::get('/news', function () {return redirect('/novedades');});
    Route::get('/blog', function () {return redirect('/novedades');});
    Route::get('/novedades', [NovedadesController::class, 'index'])->name('novedades');

    //NUESTRO EQUIPO
    Route::get('/about', function () {return redirect('/sobre-nosotros');});
    Route::get('/sobre-nosotros', function () {return redirect('/nuestro-equipo');});
    Route::get('/nuestro-equipo', [SobreNosotrosController::class, 'index'])->name('nuestroEquipo');

    //AVISO LEGAL
    Route::get('/legal', function () {return redirect('/aviso-legal');});
    Route::get('/aviso-legal', [AvisoLegalController::class, 'index'])->name('avisoLegal');

    //PARTNERS
    Route::get('/partners', [PartnersController::class, 'index'])->name('partners');

//INTRANET-ROUTES

    //User loggin
    Route::get('/intranet', [LoginController::class, 'index'])->name('intranet.index');
    Route::post('/intranet/login', [LoginController::class, 'login'])->name('intranet.login'); 
    Route::get('/intranet/login', function() { abort(404); });
    Route::get('/intranet/logout', [LoginController::class, 'logout'])->name('intranet.logout');

    //Operario logged middleware
    Route::middleware([CheckLoggedOperario::class])->group(function () {
        
        Route::get('/intranet/informa-pedido', [OperarioPedidoController::class, 'index'])->name('intranet.operario-pedido.index');
        Route::get('/intranet/informa-pedido/{id}/editar', [OperarioPedidoController::class, 'edit'])->name('intranet.operario-pedido.edit');
        Route::post('/intranet/informa-pedido/{id}/guardar', [OperarioPedidoController::class, 'update'])->name('intranet.operario-pedido.update');
        Route::get('/intranet/informa-pedido/{id}/guardar', function() { abort(404); });

    });

    //Admin logged middleware
    Route::middleware([CheckLoggedAdmin::class])->group(function () {

        //Resumen Controller
        Route::get('/intranet/resumen/', [ResumenController::class, 'index'])->name('intranet.resumen.index');
        Route::match(['POST','GET'], '/intranet/resumen/buscar', [ResumenController::class, 'search'])->name('intranet.resumen.search');
        Route::get('/intranet/resumen/descargarResumen/{diaInicio}', [ResumenController::class, 'downloadResumen'])->name('intranet.resumen.downloadResumen');
        Route::get('/intranet/resumen/descargarAlbaranes/{diaInicio}', [ResumenController::class, 'downloadAlbaranes'])->name('intranet.resumen.downloadAlbaranes');

        //Pedidos Controller
        Route::get('/intranet/pedidos', [PedidosController::class, 'index'])->name('intranet.pedidos.index');
        Route::match(['POST','GET'], '/intranet/pedidos/buscar', [PedidosController::class, 'search'])->name('intranet.pedidos.search');
        Route::get('/intranet/pedidos/crear', [PedidosController::class, 'create'])->name('intranet.pedidos.create');
        Route::post('/intranet/pedidos/guardar', [PedidosController::class, 'store'])->name('intranet.pedidos.store');
        Route::get('/intranet/pedidos/guardar', function() { abort(404); });
        Route::get('/intranet/pedidos/{id}/editar', [PedidosController::class, 'edit'])->name('intranet.pedidos.edit');
        Route::post('/intranet/pedidos/{id}/guardar', [PedidosController::class, 'update'])->name('intranet.pedidos.update');
        Route::get('/intranet/pedidos/{id}/guardar', function() { abort(404); });
        Route::get('/intranet/pedido/{id}/eliminar', [PedidosController::class, 'destroy'])->name('intranet.pedidos.destroy');

        //Clientes Controller
        Route::get('/intranet/clientes', [ClienteController::class, 'index'])->name('intranet.clientes.index');
        Route::get('/intranet/clientes/crear', [ClienteController::class, 'create'])->name('intranet.clientes.create');
        Route::post('/intranet/clientes/guardar', [ClienteController::class, 'store'])->name('intranet.clientes.store');
        Route::get('/intranet/clientes/guardar', function() { abort(404); });
        Route::get('/intranet/clientes/{id}/editar', [ClienteController::class, 'edit'])->name('intranet.clientes.edit');
        Route::post('/intranet/clientes/{id}/guardar', [ClienteController::class, 'update'])->name('intranet.clientes.update');
        Route::get('/intranet/clientes/{id}/guardar', function() { abort(404); });
        Route::get('/intranet/clientes/{id}/eliminar', [ClienteController::class, 'destroy'])->name('intranet.clientes.destroy');

        //Operarios Controller
        Route::get('/intranet/operarios', [OperarioController::class, 'index'])->name('intranet.operarios.index');
        Route::get('/intranet/operarios/crear', [OperarioController::class, 'create'])->name('intranet.operarios.create');
        Route::post('/intranet/operarios/guardar', [OperarioController::class, 'store'])->name('intranet.operarios.store');
        Route::get('/intranet/operarios/guardar', function() { abort(404); });
        Route::get('/intranet/operarios/{id}/editar', [OperarioController::class, 'edit'])->name('intranet.operarios.edit');
        Route::post('/intranet/operarios/{id}/guardar', [OperarioController::class, 'update'])->name('intranet.operarios.update');
        Route::get('/intranet/operarios/{id}/guardar', function() { abort(404); });
        Route::get('/intranet/operarios/{id}/eliminar', [OperarioController::class, 'destroy'])->name('intranet.operarios.destroy');

        //Articulos Controller
        Route::get('/intranet/articulos', [ArticuloController::class, 'index'])->name('intranet.articulos.index');
        Route::get('/intranet/articulos/crear', [ArticuloController::class, 'create'])->name('intranet.articulos.create');
        Route::post('/intranet/articulos/guardar', [ArticuloController::class, 'store'])->name('intranet.articulos.store');
        Route::get('/intranet/articulos/guardar', function() { abort(404); });
        Route::get('/intranet/articulos/{id}/editar', [ArticuloController::class, 'edit'])->name('intranet.articulos.edit');
        Route::post('/intranet/articulos/{id}/guardar', [ArticuloController::class, 'update'])->name('intranet.articulos.update');
        Route::get('/intranet/articulos/{id}/guardar', function() { abort(404); });
        Route::get('/intranet/articulos/{id}/eliminar', [ArticuloController::class, 'destroy'])->name('intranet.articulos.destroy');

    });