<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birth', 'address', 'phone', 'graduate', 'class', 'university', 'major', 'job', 'office_address', 'achievement', 'instagram_account', 'facebook_account', 'other_account', 'image_url',];

    public function Account(){
        return $this->belongsTo(User::class,'alumni_id');
    }
}
