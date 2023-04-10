<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmploiTempsController;
use App\Http\Controllers\NoteController;
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

/* Route::prefix('api')->group(function () {
Route::post('/login', 'AuthController@logins');
}); */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/api/emplois-temps', [EmploiTempsController::class, 'store'])->name('add.emploi');
Route::get('/emploi', [EmploiTempsController::class, 'emploiByFiliere']);
Route::get('/download-emploi', [EmploiTempsController::class, 'downloadEmploi']);
Route::get('/get-notes', [NoteController::class, 'getNote']);