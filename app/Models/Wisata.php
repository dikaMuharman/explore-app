<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';

    protected $fillable = [
        'nama',
        'lokasi',
        'deskripsi',
        'foto'
    ];

    protected $casts = [
        'foto' => 'array'
    ];
    use HasFactory;

    public function atraksiTuris()
    {
        return $this->hasMany(AtraksiTuris::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function paketWisata()
    {
        return $this->hasMany(PaketWisata::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
