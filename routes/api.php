<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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