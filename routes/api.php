<?php

use App\Models\Invited;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InvitedController;

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
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('import-invited', [InvitedController::class, 'import']);
    Route::apiResource('events', EventController::class);
    Route::apiResource('invited', InvitedController::class);
    Route::resource('responses', Response::class);
});
Route::group(['middleware' => ['guest']], function () {
});
