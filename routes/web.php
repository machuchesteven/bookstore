<?php
namespace App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/stock', [HomeController::class, 'stock']);

// authors
Route::get('/author/{id}', [AuthorController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'list']);
Route::post('/author', [AuthorController::class, 'create']);
Route::put('/author/{id}', [AuthorController::class, 'update_author']);


// customer routes
Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'create']);
Route::put('/customer', [CustomerController::class, 'update']);

// customer orders
Route::get('/customer/orders', [CustomerController::class, 'orders']);
Route::get('/cart/{id}', [CustomerController::class, 'active_order']);


// inventory routes
Route::get('/stock', [HomeController::class, 'stock']);
Route::get('/stock/add/{id}', [HomeController::class, 'add_books_to_stock']);
Route::put('/stock/add/{id}', [HomeController::class, 'add_books_to_stock']);


Route::post('/login', [UserController::class, 'authenticate']);

// try user Auth supports
Route::get('/try_user', [UserController::class, 'ban_user']);