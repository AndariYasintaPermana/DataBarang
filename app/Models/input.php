<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    protected $table = ("inputs");
    protected $primary_key = ('NoBarang');
    protected $fillable = [
        'NoBarang',
        'NamaBarang',
        'Varian',
        'TanggalKadaluarsa',
        'TanggalProduksi',
        'HargaBeli'
    ];

}
