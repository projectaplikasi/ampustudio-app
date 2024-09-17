<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\TransactionController;

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
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class,'logout']);

Route::get('/', [ViewController::class, 'index']);
Route::get('/detail/show={product:kode_produk}', [ViewController::class, 'detail']);
Route::get('/transaksi={product:kode_produk}', [ViewController::class, 'transaksi']);
Route::get('/product', [ViewController::class, 'product']);



Route::get('/hasiltransaksi', [TransactionController::class, 'hasil']);

Route::post('/tambahkontak', [ContactController::class, 'tambahkontak']);
Route::post('/editkontak={contact:id}', [ContactController::class, 'editkontak']);
Route::delete('/deletekontak/{contact:id}', [ContactController::class, 'deletekontak']);


Route::post('/pesanproduct={product:id}', [TransactionController::class, 'pesan']);
Route::post('/login',[AuthController::class, 'loginPost']);
Route::middleware('isAuth')->group(function (){
    Route::get('/admin/halamanadmin', [ViewController::class, 'halamanadmin']);
    Route::get('/admin/tambahproduk', [ViewController::class, 'tambahproduk']);
    
    Route::get('/admin/halamandataproduk', [ViewController::class, 'halamandataproduk']);
    Route::get('/admin/produkedit={product:id}', [ViewController::class, 'produkedit']);
    Route::get('/admin/kontak', [ViewController::class, 'kontak']);
    Route::get('/admin/tambahkontak', [ViewController::class, 'tambahkontak']);
    Route::get('/admin/editkontak={contact:id}', [ViewController::class, 'editkontak']);
    Route::post('/pesanproduct={product:id}',[TransactionController::class,'pesan']);
Route::post('/tambahproduk', [ProductController::class, 'tambahproduk']);
Route::delete('/deleteproduk/{id}', [ProductController::class, 'deleteproduk'])->name('deleteproduk');
Route::post('/editproduk={product:id}', [ProductController::class, 'editproduk']);
});



