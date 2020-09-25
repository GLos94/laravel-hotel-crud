<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('index');

Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza-show');
