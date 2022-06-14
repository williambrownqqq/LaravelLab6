<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'artist_song';
    use HasFactory;

    

    // public function manySongs(){
    //     return $this->belongsToMany(Playlist::class);
    // }

    // public function artistMany(){
    //     // создали обратную связь один ко многим belongsTo
    //     return $this->belongsToMany(Artist::class);
    // }
}
