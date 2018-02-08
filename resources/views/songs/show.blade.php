@extends('layouts.base')

@section('title', 'Song Details')

<nav><a href="{{route('home')}}">Home</a><a href="{{route('songs.index')}}">Songs</a></nav>

@include('layouts.header', ['header' => $song->name])

<p>Name: {{$song->name}}</p>
<p>Singer: <?= $song->singer; ?> </p>
<p>Band: {{$song->band}}</p>
<p class="centered">Lyrics:</p>
<div class="centered lyrics">{!! $song->lyrics !!}</div>