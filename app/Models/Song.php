<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs';
    public function artist(){
        // создали обратную связь один ко многим belongsTo
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
    public function manyartists(){
        // создали обратную связь один ко многим belongsTo
        return $this->belongsToMany(Artist::class);
    }
}
