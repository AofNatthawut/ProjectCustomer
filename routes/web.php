<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("/customer", [CustomerController::class, "index"])->name('customer.index');
Route::get("/customer/create", [CustomerController::class, "create"])->name('customer.create');
Route::post("/customer", [CustomerController::class, "store"])->name('customer.store');
Route::get('/customer/{id}', [CustomerController::class, "show"])->name('customer.show');
Route::get("/customer/{id}/edit", [CustomerController::class, "edit"])->name('customer.edit');
Route::patch("/customer/{id}", [CustomerController::class, "update"])->name('customer.update');
Route::delete("/customer/{id}", [CustomerController::class, "destroy"])->name('customer.destroy');

// Route::resource('/product', ProductController::class );

