<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user->status === 'pending') {
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Akun Anda sedang dalam proses verifikasi oleh admin.',
            ]);
        }

        if ($user->status === 'rejected') {
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Akun Anda telah ditolak oleh admin.',
            ]);
        }

        return $next($request);
    }
}
