<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VoteController;

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

//Проект
Route::get('/', [VoteController::class, 'showAll']);
Route::get('/vote/create', function () {
    return view('create_vote');
})->name('vote.create');
Route::post('vote/create', [VoteController::class, 'create']);
Route::get('/vote/show/{id}', [VoteController::class, 'show'])->name('vote.show');
Route::get('/vote/positive_inc/{id}', [VoteController::class, 'incPos'])->name('vote.pos');
Route::get('/vote/negative_inc/{id}', [VoteController::class, 'incNeg'])->name('vote.neg');
