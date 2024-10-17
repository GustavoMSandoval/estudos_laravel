<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()) {
            return redirect(route('login.form'));
        }

        $email = Auth::user()->email;
        $data = explode('@', $email);
        $servidorEmail = $data[1];

        if($servidorEmail != 'gmail.com') {
            return redirect(route('login.form'));
        }

        return $next($request);
    }
}