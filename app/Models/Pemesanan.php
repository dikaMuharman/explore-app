<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';

    protected $fillable = [
        'nama_pemesan',
        'wisata',
        'paket',
        'tanggal_berangkat',
        'tanggal_pulang',
        'harga_paket',
        'jumlah_paket',
        'total_harga'
    ];

    protected $cast = [
        'tanggal_berangkat' => 'date',
        'tanggal_pulang' => 'date'
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

}
