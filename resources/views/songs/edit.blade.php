@extends('layouts.base')

@section('title', 'Edit '.$song->name)

<nav><a href="{{route('home')}}">Home</a> <a href="{{route('songs.index')}}">Songs</a></nav>

@include('layouts.header', ['header' => 'Edit '.$song->name])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('songs.update', [$song->id] )}}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <p class="centered">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{$song->name}}">
    </p>
    <p class="centered">
        <label for="singer">Singer</label>
        <input type="text" name="singer" id="singer" placeholder="Author" value="{{$song->singer}}">
    </p>
    <p class="centered">
        <label for="band">Band</label>
        <input type="text" name="band" id="band" placeholder="Band" value="{{$song->band}}">
    </p>
    <p class="centered">
        <label for="lyrics">Lyrics</label><br>
        <textarea name="lyrics" id="lyrics" rows="5" cols="45">{{$song->lyrics}}</textarea>
    </p>
    <p  class="centered">
        <input type="submit" value="Edit">
    </p>
</form>
