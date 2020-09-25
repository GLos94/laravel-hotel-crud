<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('index');

Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza-show');

Route::get('/create/stanze', 'StanzaController@create') -> name('stanza-create');
Route::post('/create/stanze', 'StanzaController@store') -> name('stanza-store');
