<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ArticlesController;


// Guest
Route::middleware('guest')->group( function() {

    // Check if "admin" exists
    if (!User::where('name', 'admin')->exists()){
        Route::get('/register', [AdminController::class, 'create' ]);
        Route::post('/register', [AdminController::class, 'store']);

        Route::get('/login', function() { return redirect('/'); })->name('login');
        Route::post('/login', function() { return redirect('/'); });

    } else {
        Route::get('/register', function() { return redirect('/'); });
        Route::post('/register', function() { return redirect('/'); });
        Route::get('/login', [SessionController::class, 'create' ])->name('login');
        Route::post('/login', [SessionController::class, 'store']);
    }
    

});

Route::get('/', function () { return view('index'); });
Route::get('/about', function () { return view('about'); });
Route::get('/articles', function() { return view('articles'); });
Route::get('/projects', function () { return view('projects'); });
Route::get('/contact', function () { return view('contact'); });


// Auth
Route::middleware('auth')->group( function() {

    // Create
    Route::get('/articles/new', [ArticlesController::class, 'create']);
    Route::post('/articles/new', [ArticlesController::class, 'store']);

    // Update
    Route::get('/articles/update/{article:id}', [ArticlesController::class, 'edit']);
    Route::put('/articles/update/{article:id}', [ArticlesController::class, 'update']);

    Route::delete('/logout', [SessionController::class, 'destroy']);
} );