<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_loker',
        'nama_penyedia',
        'deskripsi',
        'kualifikasi',
        'alamat',
        'email',
        'phone',
        'tanggal',
    ];

}
