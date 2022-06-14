@extends('app')

@section('title')
    {{$artist->name}}
@endsection

@section('content')

    <h1>{{$artist->name}}</h1>

    <div class="container">
        <p>Artist: {{$artist->name}}</p>  
        <p>Artist's songs: </p>
        @foreach($artist->songs as $song)
                    <div class="element">
                        <div>
                            <p>{{$song->title}}</p>
                        </div>
                @endforeach
    </div>
@endsection