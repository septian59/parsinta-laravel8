<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);

Route::get('users', [UserController::class, 'index']);
Route::get('user/{user:username}', [UserController::class, 'show']);

Route::middleware('auth')->group(function () {

    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});


Route::middleware('guest')->group(function () {


    Route::get('/register', [RegisterationController::class, 'create'])->name('register');
    Route::post('/register', [RegisterationController::class, 'store'])->name('register');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});




// Route::get('tasks', [TaskController::class, 'index']);
// Route::get('tasks/create', [TaskController::class, 'create']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
