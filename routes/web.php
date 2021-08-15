<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentScholarshipController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::get('/profilestudent', function () {
    return view('profilestudent');
});

Route::get('/termination', function () {
    return view('termination');
});

Route::get('/scholarshipdetails', [StudentScholarshipController::class, 'show']);

Route::post('/scholarshipdetails', [StudentScholarshipController::class, 'index']);

Route::post('/profilestudent', [ProfileController::class, 'index']);

Route::post('/termination', [StudentScholarshipController::class, 'delete']);

require __DIR__.'/auth.php';
