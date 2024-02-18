<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\UserController;
use App\Htpp\Controllers\SubjectController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'Ini Halaman About';
});

Route::get('/services', function () {
    return view('servis');
});

//Route::get('/vote', [VoteController::class, 'vote'])->middleware('checkage');
Route::get('/voters', [VoterController::class, 'viewVoter']);
//----------/alamat url, nama file controller, nama function


Route::get('/studentusers', [UserController::class, 'viewStudent']);
Route::get('/teacheruser}', [UserController::class, 'viewTeacher']);
Route::get('/adminuser}', [UserController::class, 'viewAdmin']);

Route::get('/studentsubject}', [SubjectController::class, 'viewStudent']);
Route::get('/teachersubject}', [SubjectController::class, 'viewTeacher']);
Route::get('/adminsubject}', [SubjectController::class, 'viewAdmin']);

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);