<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReservasi extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = ['nama_tamu', 'email', 'no_hp', 'tipe_kamar', 'jumlah_kamar', 'tgl_check_in', 'tgl_check_out'];
}