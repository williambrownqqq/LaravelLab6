<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Song;
use \App\Models\Artist;
class SongController extends Controller
{
    public function create(Request $request)
    {
        $song = new Song;
        $song->title = 'Escape';
        $song->artist_id = 3;

        $song->save();

        $artist = Artist::find([3, 4]);
        $song->manyartists()->attach($artist);

        // $this->show($song);

        return 'Success';
    }

    // public function show(Song $song)
    // {
    //     return view('songs.show', compact('song'));
    // }

    public function home(){
        return view('home');
    }

    public function songs(){
        $songs=Song::all();
        return view("songs")->with("songs", $songs);
    }

    public function song($id){
        $song=Song::find($id);
        return view("song")->with("song", $song);;
    }

    public function artists(){
        $artists=Artist::all();
        return view("artists")->with("artists", $artists);
    }

    public function artist($id){
        $artist=Artist::find($id);
        return view("artist")->with("artist", $artist);;
    }

}
