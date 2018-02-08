@extends('layouts.base', ['title' => 'Pelicula'])

@section('body')
<p><a href="{{route('peliculas.index')}}">Inicio</a></p>
<p>Título: <span style="font-size: 28px">{{$pelicula->titulo}}</span></p>
<p>Año: {{$pelicula->ano}}</p>
<p><a href="{{route('peliculas.edit', $pelicula)}}">Editar pelicula</a></p>
<img src="{{}}">
@stop