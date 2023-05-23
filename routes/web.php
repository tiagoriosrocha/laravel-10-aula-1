<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/olamundo', function(){
	return "Hello World!";
});

Route::get('/olapessoa/{name?}', function($name='Estranho'){
	return "Hello " . $name;
});

Route::get('/paramaiusculo/{palavra}', [StringsController::class, 'paraMaiusculo']);

Route::get('/paramaiusculoformatada/{palavra}', [StringsController::class, 'paraMaiusculoFormatada']);

Route::get('/paracaractere/{palavra}', [StringsController::class, 'paraArray']);
