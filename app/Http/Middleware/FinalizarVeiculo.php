<?php

namespace App\Http\Middleware;

use App\Entities\Veiculo;
use Closure;
use Illuminate\Support\Facades\Auth;

class FinalizarVeiculo
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $veiculo = Veiculo::find($request->id);

        if (!$veiculo->isThisUser(Auth::user())) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
