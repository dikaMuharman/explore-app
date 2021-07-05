<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $table = 'paket_wisatas';

    protected $fillable = [
        'nama_wisata',
        'nama_hotel',
        'nama_pesawat',
        'rating',
        'kelas_pesawat',
        'fasilitas',
        'harga_paket'
    ];

    public function wisata()
    {
        return $this->belongsToMany(Wisata::class);
    }
}
