<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

//returning homepage
Route::get('/home',RecordController::class .'@display_record')->name('record.index');

//returning create record form
Route::get('/record/create',RecordController::class .'@display_create')->name('record.create');

//returning update record form
Route::get('/record/{record}/update',RecordController::class .'@display_update')->name('record.update');

//returning 
Route::get('/record/{record}',RecordController::class .'@show_record')->name('record.show');

//store record
Route::post('/record', RecordController::class .'@store')->name('record.store');

//delete record
Route::delete('/record/{record}',RecordController::class .'@delete')->name('record.delete');

//update record
Route::put('/record/{record}', RecordController::class .'@update')->name('record.update');

