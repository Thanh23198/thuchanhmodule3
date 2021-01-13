<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("admin")->group(function () {
    Route::get("/", [\App\Http\Controllers\StoreController::class, "index"])->name("admin.index");
    Route::get("/create", [\App\Http\Controllers\StoreController::class, "create"])->name("admin.create");
    Route::post("/create", [\App\Http\Controllers\StoreController::class, "store"])->name("admin.store");
    Route::post("/search", [\App\Http\Controllers\StoreController::class, "search"])->name("admin.search");

    Route::get("/edit/{id}", [\App\Http\Controllers\StoreController::class, "edit"])->name("admin.edit");
    Route::post("/edit/{id}", [\App\Http\Controllers\StoreController::class, "update"])->name("admin.update");
    Route::get("/delete/{id}", [\App\Http\Controllers\StoreController::class, "destroy"])->name("admin.destroy");
});
