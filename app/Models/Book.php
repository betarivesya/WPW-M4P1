<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
use HasFactory;
protected $table = 'book';
// Nama tabel dalam database (jika tidak sesuai dengan konvensi Laravel)
protected $fillable = ['nama', 'harga', 'stok'];
// Mass Assignment Protection
}
