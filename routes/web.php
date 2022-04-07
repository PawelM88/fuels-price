<?php

use App\Http\Controllers\FuelsController;
use App\Http\Controllers\PetrolsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Below route for the Main index only
Route::get('/', [FuelsController::class, 'index']);

////Below route for petrol
Route::get('/petrol/index', [PetrolsController::class, 'index']);
Route::get('/petrol/result', [PetrolsController::class, 'result']);
Route::delete('/{id}', [PetrolsController::class, 'destroy']);
Route::resource('/petrol', PetrolsController::class);


