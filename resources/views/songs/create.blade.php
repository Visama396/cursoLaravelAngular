@extends('layouts.base')

@section('title', 'Add Song')

<nav><a href="{{route('home')}}">Home</a> <a href="{{route('songs.index')}}">Songs</a></nav>

@include('layouts.header', ['header' => 'New Song'])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('songs.store')}}" method="post">
    {{csrf_field()}}
    <p class="centered">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{old('name')}}">
    </p>
    <p class="centered">
        <label for="singer">Singer</label>
        <input type="text" name="singer" id="singer" placeholder="Author" value="{{old('singer')}}">
    </p>
    <p class="centered">
        <label for="band">Band</label>
        <input type="text" name="band" id="band" placeholder="Band" value="{{old('band')}}">
    </p>
    <p class="centered">
        <label for="lyrics">Lyrics</label><br>
        <textarea name="lyrics" id="lyrics" placeholder="Type here the lyrics, use ruby tag if needed..." rows="5" cols="45"></textarea>
    </p>
    <p  class="centered">
        <input type="submit" value="Create">
    </p>
</form>
