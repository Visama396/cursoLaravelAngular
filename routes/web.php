<?php

use \App\Pelicula;
use \App\Productor;
use \App\Genero;

Route::get('/', function() {
	return view('home');
})->name('home');

Route::get('/movie/formulario', function() {
	return view('form');
});

Route::resource('songs','SongController');

Route::resource('words', 'WordController');

Route::resource('peliculas','PeliculaController');

Route::get('/dictionary', 'WordController@index')->name('dictionary');
Route::get('/test', function () {
	 return view('home');
});

Route::get('/test/{number?}', function($number = null) {
	if ($number == null) {
		return 'Testing index';
	} else if ($number == 'download') {
		$file = storage_path()."/app/public/image1.jpg";
		return Response::download($file, 'wallpaper-full-hd.jpg');
	}
	return $number.'. This is a subpage for testing.';
})->name('test');