<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_hotel';
    protected $fillable = ['nama_fasilitas', 'image', 'keterangan'];
}
