<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
    protected $fillable = [
        'value'
    ];

    /**
     * Enumeration for 'jenis_kelamin'.
     *
     * @var array
     */
    public static $enumValue = ['sangat_buruk', 'buruk', 'cukup', 'baik', 'sangat_baik'];

    /**
     * Set the 'jenis_kelamin' attribute.
     *
     * @param  string  $value
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function setValueAttribute($value) {
        if (!in_array($value, self::$enumValue)) {
            throw new \InvalidArgumentException("Value Tidak Valid");
        }

        $this->attributes['value'] = $value;
    }

    public function value_kualitas(){
        return $this->belongsTo(Survey::class, 'id_kualitas_pengajar');
    }

    public function value_pengalaman(){
        return $this->belongsTo(Survey::class, 'id_pengalaman_keseluruhan');
    }

    public function value_kegiatan(){
        return $this->belongsTo(Survey::class, 'id_kegiatan_ekstrakulikuler');
    }

    public function value_prestasi(){
        return $this->belongsTo(Survey::class, 'id_prestasi_akademik');
    }

    public function value_kesejahteraan(){
        return $this->belongsTo(Survey::class, 'id_kesejahteraan_siswa');
    }

    public function value_keterlibatan(){
        return $this->belongsTo(Survey::class, 'id_keterlibatan_orangtua');
    }

    public function value_komunikasi(){
        return $this->belongsTo(Survey::class, 'id_komunikasi');
    }

    public function value_dukungan(){
        return $this->belongsTo(Survey::class, 'id_dukungan_administrasi');
    }

    public function value_lingkungan(){
        return $this->belongsTo(Survey::class, 'id_lingkungan_sekolah');
    }

    public function fasilitas(){
        return $this->belongsTo(Survey::class, 'id_fasilitas_sekolah');
    }
}
