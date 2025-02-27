<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
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

        //feature
        Route::controller(FeatureController::class)->group(function(){
            Route::resource('features', FeatureController::class);
        });

        //message
        Route::controller(MessageController::class)->group(function(){
            Route::resource('messages', MessageController::class)->only(['index','show','destroy']);
        });
        //subscriber
        Route::controller(SubscriberController::class)->group(function(){
            Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);
        });
        //testmonial
        Route::controller(TestmonialController::class)->group(function(){
            Route::resource('testmonials', TestmonialController::class);
        });

        //company
        Route::controller(CompanyController::class)->group(function(){
            Route::resource('companies', CompanyController::class)->except(['show']);
        });
        //member
        Route::controller(MemberController::class)->group(function(){
            Route::resource('members', MemberController::class);
        });
         //setting
         Route::controller(SettingController::class)->group(function(){
            Route::resource('settings', SettingController::class)->only(['index','update']);
        });
    });
    require __DIR__.'/auth.php';
 });

