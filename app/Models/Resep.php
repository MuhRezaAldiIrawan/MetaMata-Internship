<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory,Likeable;

    protected $fillable = [
        'judul',
        'deskripsi',
        'bahan',
        'langkah_pembuatan',
        'foto',
        'suka'
    ];
}
