<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtraksiTuris extends Model
{
    protected $table = 'atraksi_turis';

    protected $fillable = [
        'nama',
        'foto',
    ];
    use HasFactory;
    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
