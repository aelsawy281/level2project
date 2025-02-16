<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/**
 * Front Routes
 */
Route::name('front.')->controller(FrontController::class)->group(function () {
    // =================================== HOME PAGE
    Route::post('/subscriber/store', 'subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index');

    // =================================== ABOUT PAGE
    Route::get('/about', 'about')->name('about');

    // =================================== SERVICE PAGE
    Route::get('/service', 'service')->name('service');

    // =================================== CONTACT PAGE
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');
});

/**
 * Admin routes
 */
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware ( [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])
->group(function () {

    Route::middleware('auth')->group(function(){
        //Home Page
        Route::view('/', 'admin.index')->name('index');
        
        //service
        Route::controller(ServiceController::class)->group(function(){
            Route::resource('services', ServiceController::class);
        });

    });
    require __DIR__.'/auth.php';
 });

