<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\StockDataController;
use App\Http\Controllers\WarehouseController;
 use App\Http\Controllers\ProductController;
 use App\Http\Controllers\StudentController;

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
Route::get('/set-customer/{customer_id}', function ($customer_id) {
    session(['customer_id' => $customer_id]);
    return redirect()->route('explore.page'); // Redirect to your explore page
})->name('set.customer');
Route::get('/dashboard', [StockDataController::class, 'index']);
Route::get('/warehouse/{customer_id}', [WarehouseController::class, 'showWarehouseDetails'])->name('set.customer');
require __DIR__.'/auth.php';

Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');

Route::get('/students',[StudentController::class,'index'])->name('student.index');
Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/students',[StudentController::class,'store'])->name('student.store');


