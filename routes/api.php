<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/geocode',[\App\Http\Controllers\WrapperController::class,'forward'])
-> middleware('npm')
->name('forward');
Route::get('2/findsequence.json',[\App\Http\Controllers\WrapperController::class,'forwardw'])
-> middleware('npm')
->name('forwardw');

Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006063',
            'nama'=>'Rheza Muharammdani',
            'email'=>'197006063@student.unsil.ac.id'
        ]
    ];
})->middleware('npm');
