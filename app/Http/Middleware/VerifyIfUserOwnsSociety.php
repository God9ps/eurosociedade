<?php

namespace euromilhoes\Http\Middleware;

use Closure;

class VerifyIfUserOwnsSociety
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
        $societyAdminId = $request->route('society')->id_admin;
        if ($societyAdminId === auth()->id())
            return $next($request);

        alert()->error('Não tem permissões para aceder a esta página!','Erro')->persistent('Okay');

        return back();
    }
}
