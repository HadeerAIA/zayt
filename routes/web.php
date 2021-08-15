<?php

use App\Http\Controllers\AskController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Pag;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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

// Route::get('/bill', function () {
//   return view('bill');
// });

Route::get('/', function () {
  return view('welcome');
});
Route::get('/services', function () {
  return view('services');
});
Route::get('/customers', function () {
  return view('customers');
});

Route::get('/thanks', function () {
  return view('thanks');
})->name('thanks');
//   Route::get('/pro', function () {
//     return view('profile');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route for Asks
Route::resource("Asks", AskController::class);


//Route for Users middleware('auth:admin')
//Route::get('/users', [UserController::class, 'index'])->name('users');
// Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::resource("admin", UserController::class);
//Route::resource("bills", BillController::class);
Route::get('/profile', [BillController::class, 'index'])->name('profile');
Route::get('/bill/create', [BillController::class, 'create'])->name('bill.create');
Route::post('/bill/store', [BillController::class, 'store'])->name('bill.store');
Route::get("/user/{user}/bills", [UserController::class, "getBills"])->name('users.profile');


