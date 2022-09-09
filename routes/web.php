<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'Home']);

Route::get('/add-data',[SiteController::class, 'addData']);

Route::post('/store-data',[SiteController::class, 'storeData']);

