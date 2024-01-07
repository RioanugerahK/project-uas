<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundries extends Model
{
    use HasFactory;
    protected $table = 'laundries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'jenis_sepatu',
        'layanan',
        'no_hp',
        'tanggal_pickup',
        'waktu_pickup',
        'alamat'
    ];
}
