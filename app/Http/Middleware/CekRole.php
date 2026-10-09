<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Pengecekan role pengguna berdasarkan parameter
        if (!$request->user() || $request->user()->role !== $role) {
            return response()->json(['message' => 'Akses ditolak!'], 403);
        }

        return $next($request);
    }
}