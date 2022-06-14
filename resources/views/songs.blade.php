@extends('app')
@section('title')
   Songs
@endsection
@section('content')
    <h1>All the songs</h1>

    <div class="container">
            @foreach($songs as $song)
                    <div class="element">
                        <div>
                           <!-- <p>{{$song->title}}</p> -->
                           <a href="{{ url('song', ['id' => $song]) }}">{{$song->title}}</a>
                        </div>
                @endforeach
        </div>
@endsection