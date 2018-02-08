@extends('layouts.base')

@section('title', 'Songs List')

<nav><a href="{{route('home')}}">Home</a></nav>

@include('layouts.header', ['header' => 'Songs List'])

@section('body')
<table>
    <tr>
        <th>Name</th>
        <th>Singer</th>
        <th>&nbsp;</th>
    </tr>
    @forelse ($songs as $song)
        <tr>
            <td><a href="{{ route('songs.show', [$song->id]) }}">{{$song->name}}</a></td>
            <td>{!! $song->singer !!}</td>
            <td><a href="{{ route('songs.edit', [$song->id]) }}">Edit</a></td>
        </tr>
    @empty
</table>
<br>
<p class="centered">There are no songs</p>
    @endforelse

<p class="centered"><a href="{{route('songs.create')}}">Add Song</a></p>
@stop