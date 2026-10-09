<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function edit(int $id): string
    {
        if ($id === 1) {
            return 'Berhasil! Anda berhak mengedit postingan ini karena Anda adalah pemiliknya.';
        }

        abort(403, 'This action is unauthorized.');
    }
}
