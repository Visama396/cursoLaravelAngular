<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	@section('styles')
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	@show
</head>
<body>
	@yield('body')
	@include('layouts.footer')
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>