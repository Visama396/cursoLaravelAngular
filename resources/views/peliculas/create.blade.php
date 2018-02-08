@extends('layouts.base')

@section('body')
<a href="{{route('peliculas.index')}}">Lista de peliculas</a>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

<form action="{{route('peliculas.store')}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<p>
		<label for="titulo">Titulo</label>
		<input type="text" name="titulo" id="titulo" placeholder="Titulo" value="{{old('titulo')}}">	
	</p>
	<p>
		<label for="ano">Año</label>
		<input type="number" name="ano" id="ano" value="{{old('ano')}}">
	</p>
	<p>
		<label for="poster">Poster</label>
		<input type="file" name="poster" id="poster">
	</p>
	<p>
		<input type="submit" name="create" value="Create">
	</p>
</form>

@stop