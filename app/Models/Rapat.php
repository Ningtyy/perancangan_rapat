<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    //use HasFactory;
    
    protected $table = "rapat";

    protected $fillable = [
        'id_rapat',
        'tanggal',
        'waktu',
        'pimpinan',
        'jabatan_pimpinan',
        'inisiator',
        'notulis',
        'acara',
        'catatan'
        //'laporan'
    ];
}
