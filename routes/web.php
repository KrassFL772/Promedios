<?php

use Illuminate\Support\Facades\Route;

Route::get('Materias', 'Materias_Ctrl@index')->name('Materias.index'); 
Route::post('Materias', 'Materias_Ctrl@store')->name('Materias.store'); 
Route::post('Materias/create', 'Materias_Ctrl@create')->name('Materias.crear'); 
Route::get('Materias/{Materias_ID}', 'Materias_Ctrl@show')->name('Materias.show'); 
Route::patch('Materias/{Materias_ID}', 'Materias_Ctrl@update')->name('Materias.update'); 
Route::delete('Materias/{Materias_ID}', 'Materias_Ctrl@destroy')->name('Materias.destroy'); 
Route::get('Materias/{Materias_ID}/edit', 'Materias_Ctrl@edit')->name('Materias.edit'); 

