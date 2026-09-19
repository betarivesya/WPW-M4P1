<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return "Menampilkan semua book";
    }

    public function show($id)
    {
        return "Menampilkan produk dengan ID: " . $id;
    }

    public function create()
    {
        return "Form tambah produk";
    }

    public function store(Request $request)
    {
        // Opsi 1: Manual
        $book = new Book();
        $book->nama = "Laptop";
        $book->harga = 15000000;
        $book->stok = 10;
        $book->save();

        return "Data berhasil disimpan!";
    }

    public function edit($id)
    {
        return "Form edit produk dengan ID: " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Mengupdate produk dengan ID: " . $id;
    }

    public function destroy($id)
    {
        return "Menghapus produk dengan ID: " . $id;
    }
}
