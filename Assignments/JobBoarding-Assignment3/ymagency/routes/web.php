<?php

use App\Http\Controllers\FieldjobController;
use App\Models\fieldjob;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/fieldjob', function () {
    $jobs = fieldjob::all();
    return view('fieldjobs.index',['jobs' => $jobs]);
});
Route::get('/applicants', function () {
    $users = User::all();
    return view('applicants.index', ['users' => $users]);
});
Route::get('fieldjob/trash/{id}',[FieldjobController::class, 'trash'])->name('fieldjob.trash');
Route::get('fieldjob/trashed/',[FieldjobController::class, 'trashed'])->name('fieldjob.trashed');
Route::get('fieldjob/restore/{id}',[FieldjobController::class, 'restore'])->name('fieldjob.restore');
Route::resource('fieldjob',FieldjobController::class);