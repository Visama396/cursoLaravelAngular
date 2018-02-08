@extends('layouts.base')

@section('body')
<a href="{{route('home')}}">Inicio</a>
<table style="border: 1px solid;">
	<tr>
		<th>Titulo</th>
		<th>Año</th>
	</tr>
@forelse ($peliculas as $pelicula)
<tr>
	<td><a href="{{ route('peliculas.show', [$pelicula->id]) }}">{{$pelicula->titulo}}</a></td>
	<td>{{$pelicula->ano}}</td>
</tr>
@empty
</table>
<p>No hay peliculas</p>
@endforelse

<p><a href="{{route('peliculas.create')}}">Crear</a></p>