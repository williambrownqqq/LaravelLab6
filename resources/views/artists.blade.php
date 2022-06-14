@extends('app')
@section('title')
    Artists
@endsection
@section('content')
    <h1>All the artists</h1>

    <div class="container">
            @foreach($artists as $artist)
                    <div class="element">
                        <div>
                           <a href="{{url('artist',$artist->id)}}">{{$artist->name}}</a>
                        </div>
                @endforeach
        </div>
@endsection