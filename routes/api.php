<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

//Get employer
Route::get('employees', [EmployeeController::class, 'getEmployees']);
//Get employer avec son id
Route::get('employee/{id}', [EmployeeController::class, 'getEmployee']);

//Add employer
Route::post('addEmployee', [EmployeeController::class, 'addEmployee']);

//Update employer
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

//Delete employer
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);