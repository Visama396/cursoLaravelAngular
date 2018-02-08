@extends('layouts.base')

@section('body')
	<h1>Insert Film: </h1>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<p>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
		</p>
		<p>
			<label for="year">Year</label>
			<input type="number" name="year" id="year" placeholder="Year" value="{{ old('year') }}">
		</p>
		<p>
			<label for="poster">Poster</label>
			<input type="file" name="poster" id="poster">
		</p>
		<p>
			<input type="submit" name="send" value="Send">
		</p>
	</form>
@stop