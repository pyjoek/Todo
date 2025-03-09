<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

//category
Route::get("category",[CategoryController::class,'index']);
Route::get("showCat/{id}", [CategoryController::class, "show"]);
Route::delete("delCat/{id}", [CategoryController::class, "destroy"]);
Route::post("addCat", [CategoryController::class, "store"]);
Route::put("editCat/{id}", [CategoryController::class, "update"]);

//article
Route::get("article", [ArticleController::class, "index"]);
Route::get("showArt/{id}", [ArticleController::class, "show"]);
Route::delete("delArt/{id}", [ArticleController::class, "destroy"]);
Route::post("addArt", [ArticleController::class, "store"]);
Route::post("editArt/{id}", [ArticleController::class, "update"]);
=======

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("news", function () {
    return "Hello";
});
>>>>>>> c7c93a3 (sample todo project using laravel)
