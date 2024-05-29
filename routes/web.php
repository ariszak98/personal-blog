<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProjectsController;
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

Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('projects/new', [ProjectsController::class, 'create']);

Route::get('/contact', function () { return view('contact'); });


// Auth
Route::middleware('auth')->group( function() {

    // Create Article
    Route::get('/articles/new', [ArticlesController::class, 'create']);
    Route::post('/articles/new', [ArticlesController::class, 'store']);

    // Update Article
    Route::get('/article/update/{article:id}', [ArticlesController::class, 'edit']);
    Route::put('/article/update/{article:id}', [ArticlesController::class, 'update']);

    // Delete Article
    Route::get('/article/delete/{article:id}', [ArticlesController::class, 'destroyConfirmation']);
    Route::delete('/article/delete/{article:id}', [ArticlesController::class, 'destroy']);

    // Create Project
    Route::get('/projects/new', [ProjectsController::class, 'create']);
    Route::post('/projects/new', [ProjectsController::class, 'store']);

    
    Route::delete('/logout', [SessionController::class, 'destroy']);
} );