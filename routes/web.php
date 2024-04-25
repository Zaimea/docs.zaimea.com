<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{page?}', DocsController::class)->name('docs')->where('page', '.*');
