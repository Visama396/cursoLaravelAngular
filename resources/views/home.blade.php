@extends('layouts.base')

@section('title', 'Homepage')

<nav><a href="{{route('peliculas.index')}}">Movies</a> <a href="{{route('songs.index')}}">Songs</a> <a href="{{route('words.index')}}">Dictionary</a></nav>

@include('layouts.header', ['header' => 'Homepage - Visama'])

@section('body')
    <p class="centered">Welcome to Visama's Website Homepage.</p>
@stop