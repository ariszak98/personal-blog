<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;


// Guest
Route::middleware('guest')->group( function() {

    Route::get('/login', [SessionController::class, 'create' ])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

    // Check if "admin" exists
    if (!User::where('name', 'admin')->exists()){
        Route::get('/register', [AdminController::class, 'create' ]);
        Route::post('/register', [AdminController::class, 'store']);
    } else {
        Route::get('/register', function() { return redirect('/'); });
        Route::post('/register', function() { return redirect('/'); });
    }
    

});

// Auth
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

