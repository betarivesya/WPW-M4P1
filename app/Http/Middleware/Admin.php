<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        // Mengecek apakah user sudah login
        if (Auth::check()) {
            // Mengecek apakah role user adalah admin
            if (Auth::user()->role == 'admin') {
                return $next($request); // Lanjutkan request jika admin
            } else {
                abort(403, 'Akses Ditolak'); // Tampilkan error 403 jika bukan admin
            }
        } else {
            return redirect()->route('login'); // Arahkan ke halaman login jika belum autentikasi
        }
    }
}

class LogRequest
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::info('Request selesai', ['url' => $request->fullUrl()]);
    }
}