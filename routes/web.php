<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/new', 'App\Http\Controllers\SongController@create')->name('song.artist');
// Route::get('/song', 'App\Http\Controllers\SongController@show')->name('songs.show');


Route::get('/', [SongController::class, 'home'])->name('home');
Route::get('/songs', [SongController::class, 'songs']);
Route::get('/artist/{id}', [SongController::class, 'artist']);
Route::get('/artists', [SongController::class, 'artists']);
Route::get('/song/{id}', [SongController::class, 'song']);

Route::get('/info', function () {
    // return view('welcome');
    // one - to - many
    $artists=\App\Models\Artist:: all();
    $songs=\App\Models\Song:: all();

    foreach ($artists as $artist){
        echo 'Artist name: '.$artist['name'].'<br>';
        echo '<b>Artist\'s song: </b><br>';
        foreach($artist->songs as $song){
            echo ' '.$song['title'].'<br>';
        }
        echo '---------------------------------<br>';
    }

    foreach ($songs as $song){
        echo 'Song title: '.$song['title'].'<br>';
        echo '<b>Artist: </b>'.$song->artist['name'].'<br>';
        echo '---------------------------------<br>';
    }

    echo 'many -to -many<br>';
    $artistslist = \App\Models\Artist::all();
    $playlist = \App\Models\Playlist::all();
    foreach($artistslist as $artist){
        echo '<b>Artist: '.$artist['name'].'<br></b>';
        echo '<b>Songs: </b><br>';
        foreach ($artist->manysongs as $song){
            echo $song['title'].'<br>';
        }
    }

    // foreach($songs as $song){
    //     echo '<b>Song: '.$song['title'].'<br></b>';
    //     echo '<b>Artist: </b>';
    //     foreach ($song->manyartists as $artist){
    //         echo $artist['name'].'<br>';
    //     }
    //     echo '--------------------------------<br>';
    // }
});

// Route::get('/songs', function () {
//     // return view('welcome');
//     // one - to - many
//     $songs=\App\Models\Song:: all();

//     foreach ($songs as $song){
//         echo 'Song title: '.$song['title'].'<br>';
//         echo '<b>Artist: </b>'.$song->artist['name'].'<br>';
//         echo '---------------------------------<br>';
//     }

// });

// Route::get('/artists', function () {
//     $artists=\App\Models\Artist:: all();

//     foreach ($artists as $artist){
//         echo 'Artist name: '.$artist['name'].'<br>';
//         echo '<b>Artist\'s song: </b><br>';
//         foreach($artist->songs as $song){
//             echo ' '.$song['title'].'<br>';
//         }
//         echo '---------------------------------<br>';
//     }

// });
