<?php

use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\MachineController;
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

Route::controller(CollaboratorController::class)->group(function () {
    Route::post('/collaborator/create', 'create');
    Route::get('/collaborators', 'getCollaborators');
    Route::get('/collaborators/{id}', 'getCollaborator');
    Route::post('/collaborator/bind-machine', 'attachMachine');
    Route::get('/collaborators/{id}/machines', 'getMachines');
});

Route::controller(MachineController::class)->group(function () {
    Route::post('/machine/create', 'create');
    Route::get('/machines', 'index');
    Route::get('/machines/{id}', 'getMachine');
});
