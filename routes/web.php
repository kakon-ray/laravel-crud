<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'Home']);

Route::get('/add-data',[SiteController::class, 'addData']);

Route::post('/store-data',[SiteController::class, 'storeData']);
Route::get('/edit-data/{id}',[SiteController::class, 'editData']);
Route::post('/update-data/{id}',[SiteController::class, 'updateDate']);
Route::get('/delete-data/{id}',[SiteController::class, 'deleteData']);

