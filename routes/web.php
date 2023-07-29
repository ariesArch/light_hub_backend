<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ClassCategoryController;
use App\Http\Controllers\Admin\CommunityCategoryController;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductAttributeValueController;
use App\Http\Controllers\Admin\ProductGroupController;
use App\Http\Controllers\Admin\TeachingClassController;
use App\Http\Controllers\Admin\TownshipController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtCategoryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionTypeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('admins', AdminController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('art_categories', ArtCategoryController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('artists', ArtistController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('materials', MaterialController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('terms', TermController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('collections', CollectionController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('collection_types', CollectionTypeController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('community_categories', CommunityCategoryController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('communities', CommunityController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('cities', CityController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('townships', TownshipController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('pages', PageController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('teaching_classes', TeachingClassController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('product_groups', ProductGroupController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('class_categories', ClassCategoryController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('attributes', AttributeController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('attribute_values', AttributeValueController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('product_attribute_values', ProductAttributeValueController::class, ['except' => ['store', 'update', 'destroy']]);
});
