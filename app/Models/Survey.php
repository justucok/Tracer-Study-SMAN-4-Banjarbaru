<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'angkatan',
        'thn_lulus',
        'phone',
        'kualitas_pengajaran',
        'fasilitas_sekolah',
        'lingkungan_sekolah',
        'dukungan_administrasi',
        'komunikasi',
        'keterlibatan_ortu',
        'kesejahteraan_siswa',
        'prestasi_akademik',
        'kegiatan_ekskul',
        'pengalaman_keseluruhan',

    ];
}
