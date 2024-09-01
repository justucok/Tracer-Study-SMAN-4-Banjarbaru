<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobfair extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jobfair',
        'url_jobfair',
        'ket_jobfair',
        'image',
        'tanggal_mulai',
        'tanggal_selesai',

    ];
}
