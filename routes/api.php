<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

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
//Route::get('/users', [UserController::class, 'index']);
//Route::get('/users/{user}', [UserController::class, 'show']);

//Routes for users

Route::apiResource('/users', UserController::class);

//routes for departments
Route::apiResource('/departments', DepartmentController::class);

//routes for roles
Route::apiResource('/roles', RoleController::class);

//routes for permissions
Route::apiResource('/permissions', PermissionController::class);