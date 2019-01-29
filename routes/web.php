<?php

// Route :: get('/', function() {
// 	$nombre = 'Victor';
// 	return view('home', compact('nombre'));
// })->name('home');

Route::view('/', 'home')->name('home');  // Páginas sin mucha lógica 
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/becas', 'becas')->name('becas');
Route::view('/alimentacion', 'alimentacion')->name('alimentacion');
Route::view('/salud', 'salud')->name('salud');
Route::view('/tne', 'tne')->name('tne');
Route::view('/ymce', 'ymce')->name('ymce');
Route::view('/pue', 'pue')->name('pue');
Route::view('/resEstudiantiles', 'resEstudiantiles')->name('resEstudiantiles');
Route::view('/junaebAbierta', 'junaebAbierta')->name('junaebAbierta');