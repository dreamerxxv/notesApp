<?php

use App\Http\Controllers\AditionalNoteController;
use App\Http\Controllers\NoteController;
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

Route::resource('/notes', NoteController::class);

Route::post('/note-aditional/{note_id}', [AditionalNoteController::class, 'store'])->name("aditional.note.store");
