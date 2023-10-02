<?php

use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
fwefw
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'stagiaires' => StagiaireController::class,
]);
