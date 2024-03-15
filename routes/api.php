<?php

use App\Http\Controllers\api\bukuu;
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


Route::get('/buku',[bukuu::class,'index']);
Route::get('/buku/{id}',[bukuu::class,'show']);
Route::post('/buku/store',[bukuu::class,'store']);
Route::delete('/buku/{id}',[bukuu::class,'destroy']);