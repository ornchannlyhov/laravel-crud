<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

// Returning homepage
Route::get('/', [RecordController::class, 'display_record'])->name('record.index');

// Returning create record form
Route::get('/record/create', [RecordController::class, 'display_create'])->name('record.create');

// Returning update record form
Route::get('/record/{record}/update', [RecordController::class, 'display_update'])->name('record.updating');

// Returning show record form
Route::get('/record/{record}', [RecordController::class, 'show_record'])->name('record.update');

// Store record
Route::post('/record', [RecordController::class, 'store'])->name('record.store');

// Delete record
Route::delete('/record/{record}', [RecordController::class, 'delete'])->name('record.delete');

// Update record
Route::put('/record/{record}', [RecordController::class, 'update'])->name('record.update');

