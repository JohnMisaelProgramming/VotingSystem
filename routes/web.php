<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login'); 
})->name('login');

Route::get('/admin_dashboard', [PageController::class, 'admin_dashboard']);
Route::get('/election_dashboard', [PageController::class, 'election_dashboard']);
Route::get('/results_dashboard', [PageController::class, 'results_dashboard']);
Route::get('/candidates_dashboard', [PageController::class, 'candidates_dashboard']);
Route::get('/voters_dashboard', [PageController::class, 'voters_dashboard']);
Route::get('/candidacy_dashboard', [PageController::class, 'candidacy']);
Route::get('/add_voters', [PageController::class, 'add_voters']);
