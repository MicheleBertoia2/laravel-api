<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\LeadController;
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

Route::namespace('Api')
    ->prefix('projects')
    ->group(function(){
        Route::get('/', [ProjectController::class, 'index']);
        Route::get('/tipi', [ProjectController::class, 'getTypes']);
        Route::get('/tecnologie', [ProjectController::class, 'getTechnologies']);
        Route::get('/project-type/{id}', [ProjectController::class, 'getProjectsType']);
        Route::get('/project-technology/{id}', [ProjectController::class, 'getProjectTechnology']);
        Route::get('/{slug}', [ProjectController::class, 'getProjectDetail']);
    });


Route::post('/contacts', [LeadController::class, 'store'] );

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
