<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello Adit']);
});

Route::get('/image-url', function () {
    return response()->json(['message' => 'https://www.shutterstock.com/image-photo/photo-adorable-cute-girlish-woman-260nw-2189024121.jpg']);
});

Route::get('/username', function () {
    return response()->json(['message' => 'Bob']);
});