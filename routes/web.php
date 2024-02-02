<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecitController;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
use App\Models\Aventure;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ RecitController::class, 'show_Aventures']);

Route::get('/destination', [DestinationController::class, 'destinations']);


// Route::get('/recit', function () {
//     $destinations = Destination::all();
//     return view('recit',compact('destinations'));

// })->name('recit');

Route::get('/recit', [RecitController::class, 'Aventures'])->name('recit');

Route::get('/statistique', function () {
    return view('statistique');
});

Route::get('/recit', [RecitController::class, "Aventures"]);
Route::post('add', [RecitController::class, "add"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
