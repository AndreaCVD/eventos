<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () { return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['prefix' => 'events'], function(){
    Route::get('', [EventController::class, 'index']) -> name('index');
    Route::get('myevents', [EventController::class, 'myIndex']) -> name('myIndex');
    Route::get('create', [EventController::class, 'create']) -> name('create');
    Route::get('/{id}/edit', [EventController::class, 'edit']) -> name('edit');
    Route::get('/{id}/register', [EventController::class, 'register']) -> name('attendees.register');
    Route::get('/{id}', [EventController::class, 'show']) -> name('show');
});

Route::post('create',[EventController::class, 'store']) -> name('store');
Route::put('events/{idevent}', [EventController::class, 'update']) -> name('event.update');
Route::put('events/{id}/attendees', [EventController::class, 'storeAttendee']) -> name('attendees.store');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
