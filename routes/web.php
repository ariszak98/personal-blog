<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ArticlesController;
use App\Models\Article;

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
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/article/{article:id}', [ArticlesController::class, 'single']);
Route::get('/projects', function () { return view('projects'); });
Route::get('/contact', function () { return view('contact'); });


// Auth
Route::middleware('auth')->group( function() {

    // Create
    Route::get('/article/new', [ArticlesController::class, 'create']);
    Route::post('/article/new', [ArticlesController::class, 'store']);

    // Update
    Route::get('/article/update/{article:id}', [ArticlesController::class, 'edit']);
    Route::put('/article/update/{article:id}', [ArticlesController::class, 'update']);

    Route::delete('/logout', [SessionController::class, 'destroy']);
} );