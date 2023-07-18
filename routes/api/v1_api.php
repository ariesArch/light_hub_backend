<?php

use App\Http\Controllers\Api\V1\ArtistController;
use App\Http\Controllers\Api\V1\ArtCategoryController;
use App\Http\Controllers\Api\V1\CollectionController;
use App\Http\Controllers\Api\V1\CollectionTypeController;
use App\Http\Controllers\Api\V1\MaterialController;
use App\Http\Controllers\Api\V1\TermController;
use Illuminate\Support\Facades\Route;

Route::resource('/artists',ArtistController::class);
Route::resource('/art_categories',ArtCategoryController::class);
Route::resource('/materials',MaterialController::class);
Route::resource('/terms',TermController::class);
Route::resource('/collections',CollectionController::class);
Route::resource('/collection_types',CollectionTypeController::class);
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login')->name('api_login');
Route::middleware('auth:user_api')->group(function () {
    Route::get('/user', 'AuthController@me');
});