<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*

Route::get('/', function () {
    return view('index');
});

//Route::verbo('uri', 'método');
*/

Route::get('/', UserController::class);

Route::get('cadastrar', function(){
    return view('cadastrar');
});

Route::post('storage', [UserController::class, 'storage'])->name('storage');

Route::get('editar/{userId}', [UserController::class, 'edit']);

Route::put('update/{user}', [UserController::class, 'update']);

Route::delete('delete/{user}', [UserController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
