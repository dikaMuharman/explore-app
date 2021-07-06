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
        'wisata_id',
        'nama_hotel',
        'nama_pesawat',
        'rating',
        'kelas_pesawat',
        'fasilitas',
        'harga_paket'
    ];

    protected $attributes = [
        'wisata_id' => 0,
    ];

    protected $casts = [
        'fasilitas' => 'array',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function setPropertiesAttributes($value)
    {
        $this->attributes['fasilitas'] = json_encode($value);
    }
}
