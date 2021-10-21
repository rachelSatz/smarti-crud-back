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
use App\Http\Controllers\API\BusinessControlier;

Route::prefix('business')->group(function () {
    Route::get('/',[ BusinessControlier::class, 'getAll']);
    Route::post('/',[ BusinessControlier::class, 'create']);
    Route::delete('/{id}',[ BusinessControlier::class, 'delete']);
    Route::get('/{id}',[ BusinessControlier::class, 'get']);
    Route::put('/{id}',[ BusinessControlier::class, 'update']);
});
