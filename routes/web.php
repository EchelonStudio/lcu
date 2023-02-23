<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutus')->name('about');
    Route::get('/checking-and-savings', 'checkingandsavings')->name('cands');
    Route::get('/credit-cards', 'creditcards')->name('cc');
    Route::get('/loans', 'loans')->name('loans');
    Route::get('/test', 'test');
    Route::get('/user/account/transfer', 'transfer')->name('transfer');
    Route::get('/user/account/deposit', 'deposit')->name('deposit');
    Route::post('/user/account/add-payee', 'addPayee')->name('Payee');
    Route::get('/privacy-policy', 'privacy')->name('privacy');
    Route::get('/terms-of-service', 'terms')->name('terms');

    Route::get('user/account/change-password', 'changepassword')->name('changepassword')->middleware(['auth', 'verified']);
    Route::post('user/account/change-password', 'newpassword')->name('modifypassword');



    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';





