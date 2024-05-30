<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risalah extends Model
{
    protected $table = "risalah";

    protected $fillable = [
        'id_risalah',
        'hasil',
        'dokumentasi'
    ];
    protected $casts = [
        'dokumentasi' => 'array',
    ];
}
