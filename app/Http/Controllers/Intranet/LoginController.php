<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Usuario;
use App\Models\Rol;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            if(Auth::user()->rol->codigo == Rol::ADMIN)
            {
                return redirect()->intended('intranet/pedidos');
            }
            else if(Auth::user()->rol->codigo == Rol::OPERARIO)
            {
                return redirect()->intended('/intranet/informa-pedido');
            }
        }
        else
        {
            return view('intranet/index', []);
        }
    }

    public function login(Request $request)
    {
        $usuario = Usuario::where(function ($q) use ($request){
            $q->where('usuario', $request->usuario)->orWhere('email', $request->usuario);
        })->where('password',md5($request->password))->where('activo',1)->first();

        if ($usuario != null)
        {
            Auth::login($usuario);
            $usuario->ultimoLogin = Carbon::now();
            $usuario->save();
            if($usuario->rol->codigo == Rol::ADMIN)
            {
                return redirect()->intended('intranet/pedidos')->withSuccess('Has iniciado correctamente');
            }
            else if($usuario->rol->codigo == Rol::OPERARIO)
            {
                return redirect()->intended('/intranet/informa-pedido')->withSuccess('Has iniciado correctamente');
            }
        }
        else
        {
            return redirect("/intranet")->withErrors('Las credenciales que has introducido son erroneas');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/intranet');
    }
}
