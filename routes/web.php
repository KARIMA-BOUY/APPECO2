<?php
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\http\controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products',ProductController::class);
Route::resource('auteur',AuthorController::class);