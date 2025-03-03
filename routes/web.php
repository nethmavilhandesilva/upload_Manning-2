<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\StockDataController;
use App\Http\Controllers\WarehouseController;
 use App\Http\Controllers\ProductController;
 use App\Http\Controllers\StudentController;
 use App\Http\Controllers\CustomerController;

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
Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/students',[StudentController::class,'index'])->name('student.index');
Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/students',[StudentController::class,'store'])->name('student.store');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}',[StudentController::class,'update'])->name('student.update');


Route::get('/customers',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customers/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customers',[CustomerController::class,'store'])->name('customer.store');
Route::delete('/customers/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');
Route::get('/customers/{customer}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/customer/{customer}',[CustomerController::class,'update'])->name('customer.update');