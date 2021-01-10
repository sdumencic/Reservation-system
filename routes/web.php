<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/history', function () {
    return view('history');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

//fullcalender
Route::get('/user/{id}', [UserController::class, 'show']);


Route::get('fullcalendar', [FullCalendarController::class, 'index']);
Route::post('fullcalendar/create', [FullCalendarController::class, 'create']);
Route::post('fullcalendar/update', [FullCalendarController::class, 'update']);
Route::post('fullcalendar/delete', [FullCalendarController::class, 'destroy']);

//Route::resource('fullcalendar', FullCalendarController::class)->except(['show', 'edit', 'create']);
