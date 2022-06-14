@extends('app')

@section('title')
    {{$song->title}}
@endsection

@section('content')

    <h1>{{$song->title}}</h1>

    <div class="container">
        <p>{{$song->title}}</p>  
        <p>Artist: {{$song->artist->name}}</p>
        <!-- @foreach($song->artist as $art)
                    <div class="element">
                        <div>
                           <a href="{{ url('song', ['id' => $song]) }}">{{$song->artist->name}}</a>
                        </div>
                @endforeach
    </div> -->
@endsection