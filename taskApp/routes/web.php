<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::resource('tasks', TaskController::class);
Route::redirect('/', '/tasks');

Route::get('/', function () {
    return view('tasks.index');
});
