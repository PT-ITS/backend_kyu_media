<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket',
        'isi_paket',
        'harga',
    ];
}