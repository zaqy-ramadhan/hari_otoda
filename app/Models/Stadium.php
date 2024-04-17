<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadium'; // Assuming your table name is "stadium"

    protected $fillable = [
        'Nama', 'Kapasitas', 'Lokasi', 'Deskripsi', 'Foto'
    ];
}

