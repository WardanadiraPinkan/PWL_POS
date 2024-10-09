<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        // Cek apakah user sudah login dan memiliki peran
        if ($user && $user->hasAnyRole($roles)) {
            return $next($request);
        }

        // Jika user tidak memiliki peran yang dibutuhkan
        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini');
    }
}
