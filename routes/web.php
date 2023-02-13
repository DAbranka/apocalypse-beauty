<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})
->name('welcome')
// ->middleware(['auth', 'verified'])
;

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/homepage', function () {
    return Inertia::render('Homepage');
})->name('hompage');

Route::get('news', function () {
    return Inertia::render('Links/News/news-index');
})->name('News');

Route::get('about', function () {
    return Inertia::render('Links/About/about-index');
})->name('About');

Route::get('explore', function () {
    return Inertia::render('Links/Explore/explore-index');
})->name('Explore');

Route::get('forum', function () {
    return Inertia::render('Links/Forum/forum-index');
})->name('Forum');

Route::get('eshop', function () {
    return Inertia::render('Links/Eshop/eshop-index');
})->name('Eshop');

require __DIR__ . '/auth.php';
