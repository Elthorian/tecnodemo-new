<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;

class CheckLoggedOperario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->rol->codigo == Rol::OPERARIO) {
            return $next($request);
        }
        return redirect()->route('intranet.index');
    }
}
?>