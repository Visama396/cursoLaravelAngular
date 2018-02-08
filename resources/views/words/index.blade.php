@extends('layouts.base')

@section('title', 'Dictionary')

<nav><a href="{{route('home')}}">Home</a></nav>

@include('layouts.header', ['header' => 'IT and Programming Terms'])

@section('body')
    <table class="words">
        <tr>
            <th>English</th>
            <th>Spanish</th>
            <th>Japanese</th>
            <th>&nbsp;</th>
        </tr>
        @forelse ($words as $word)
            <tr>
                <td>{{$word->english}}</td>
                <td>{{$word->spanish}}</td>
                <td>{!! $word->japanese !!}</td>
                <td><a href="{{ route('words.edit', [$word->id]) }}">Edit</a></td>
            </tr>
        @empty
    </table>
    <br>
    <p class="centered">There are no words</p>
    @endforelse

    <p class="centered"><a href="{{route('words.create')}}">Add Word</a></p>
@stop