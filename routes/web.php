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

Route::get('/',\App\Http\Livewire\HomeComponent::class)->name('home');
Route::get('/news',\App\Http\Livewire\NewsComponent::class)->name('news');
Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');
Route::get('/news-detail/{newsId}',\App\Http\Livewire\NewsDetailComponent::class)->name('news-detail');
Route::get('/comments/{newsId}',\App\Http\Livewire\CommentComponent::class)->name('comments');
Route::get('/aboutUs',\App\Http\Livewire\AboutAsComponent::class)->name('aboutUs');
Route::get('/doctors',\App\Http\Livewire\DoctorsComponent::class)->name('doctors');
Route::get('/contact',\App\Http\Livewire\ContactComponent::class)->name('contact');
Route::get('/contactUs',[\App\Http\Controllers\ContactController::class,'contact'])->name('contactUs');
Route::get('/appointment',[\App\Http\Controllers\AppointmentController::class,'appointment'])->name('appointment');
Route::get('/comment/{id}',[\App\Http\Controllers\CommentController::class,'comment'])->name('comment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
