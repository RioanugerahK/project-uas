<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_sepatu',
        'layanan',
        'no_hp',
    ];
}