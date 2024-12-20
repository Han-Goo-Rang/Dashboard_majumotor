<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_karyawan',
        'nomor_kode',
        'nomor_telepon',
        'profesi',
        'status',
    ];

    protected $rules = [
        'nama_karyawan' => 'required',
        'nomor_kode' => 'required',
        'nomor_telepon' => 'required',
        'profesi' => 'required',
        'status' => 'required',
    ];
}
