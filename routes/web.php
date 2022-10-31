<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/',             [App\Http\Controllers\BlogController::class, 'welcome'])->name('welcome');
Route::get('/app',          [App\Http\Controllers\ApplicantController::class, 'chats'])->name('app');
Route::get('/contact',      [App\Http\Controllers\BlogController::class, 'contact'])->name('contact');
Route::get('/tests',        [App\Http\Controllers\TestController::class, 'index'])->name('test');
Route::get('/stories',      [App\Http\Controllers\BlogController::class, 'index'])->name('stories');
Route::get('/stories/{any}',[App\Http\Controllers\BlogController::class, 'index'])->where('any', '.*');
Route::get('/agency',       [App\Http\Controllers\HomeController::class, 'index'])->name('agency');
Route::get('/consultant',   [App\Http\Controllers\HomeController::class, 'index'])->name('consultant');
Route::get('/staffs',       [App\Http\Controllers\StaffController::class, 'index'])->name('staff');
Route::get('/pharmacy',     [App\Http\Controllers\PharmacyController::class, 'index'])->name('pharmacy');

Route::get('/home',         [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/clear-cache', function() {
    //$exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');-san::call('route:cache');
    $exitCode = Artisan::call('cache:clear');
    
    return "All done boss, anything else";
    // return what you want
});

Route::namespace('App\Http\Controllers')->middleware(['auth', 'role:Agency'])->name('agency.')->group(base_path('routes/web/agency.php'));
Route::namespace('App\Http\Controllers')->middleware(['auth',])->name('app.')->group(base_path('routes/web/app.php'));
Route::namespace('App\Http\Controllers')->middleware(['auth', 'role:Consultant'])->name('consultant.')->group(base_path('routes/web/consultant.php'));
Route::namespace('App\Http\Controllers')->middleware(['auth', 'role:Staff'])->name('staffs.')->group(base_path('routes/web/staff.php'));