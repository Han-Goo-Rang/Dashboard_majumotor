<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'kode_produk',
        'deskripsi',
    ];

    protected $rules = [
        'nama_produk' => 'required',
        'harga' => 'required',
        'kode_produk' => 'required',
        'deskripsi' => 'required',
    ];
}
