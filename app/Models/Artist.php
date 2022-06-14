<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
      
    public function songs(){
        return $this->hasMany(Song::class, 'artist_id', 'id');
    }

    public function manysongs(){
        return $this->belongsToMany(Song::class);
    }
    
}
