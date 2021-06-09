<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/lv');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/about', function () {
        return view('Pages/about-us', ['title' => __('Vietnes būtība'), 'class' => 'about', 'direction' => 'center']);
    })->name('about');

    Route::get('/primary-school', function () {
        return view('Pages/primary-school', ['title' => __('Sākumskola'), 'class' => 'primary-school', 'direction' => 'left']);
    })->name('primary-school');

    Route::get('/games', function () {
        return view('Pages/games', ['title' => __('Datorspēles'), 'class' => 'games', 'direction' => 'right']);
    })->name('games');

    Route::get('/high-school', function () {
        return view('Pages/high-school', ['title' => __('Vidusskola'), 'class' => 'high-school', 'direction' => 'left']);
    })->name('high-school');

    Route::get('/courses', function () {
        return view('Pages/courses', ['title' => __('Kursi'), 'class' => 'courses', 'direction' => 'center']);
    })->name('courses');

    Route::get('/hobbies', function () {
        return view('Pages/hobbies', ['title' => __('Vaļasprieki'), 'class' => 'hobbies', 'direction' => 'left']);
    })->name('hobbies');

    Route::get('/university', function () {
        return view('Pages/university', ['title' => __('Universitāte'), 'class' => 'university', 'direction' => 'right']);
    })->name('university');

});
