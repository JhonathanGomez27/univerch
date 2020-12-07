<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PQRController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ExportsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\FacultadController;
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



Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'] )->name('home');
//Carrito
Route::post('/cart-add', [CartController::class,'add'] )->name('cart.add');
Route::get('/cart-checkout', [CartController::class,'cart'])->name('cart.checkout');
Route::post('/cart-clear', [CartController::class,'clear'] )->name('cart.clear');
Route::post('/cart-removeitem',[CartController::class,'removeitem'] )->name('cart.removeitem');

//paypal

Route::post('/paypal/pay', [PaymentController::class,'payWithPayPal'] )->name('paypal.payWithPayPal');
Route::get('/paypal/status', [PaymentController::class,'payPalStatus'] )->name('paypal.payPalStatus');


//producto
Route::resource('dashboard/product', ProductController::class)->middleware('auth');
Route::post('dashboard/{product}/image',[ProductController::class,'image'])->name('product.image');
//Perfil
Route::get('/profile/{id}', [profileController::class, 'getPerfil' ]);
Route::get('/dashboard/orders/index', [OrdenController::class, 'getMyOrders' ]);

//facultad
Route::resource('dashboard/facultad', FacultadController::class);
Route::resource('dashboard/pqr', PQRController::class)->middleware('auth');;
//socialite

Route::get('login/{driver}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('login/{driver}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);


//exports
Route::get('/dashboard/export/orders/excel', [ExportsController::class, 'exportOrdersExcel' ])->name('orders.excel');
Route::get('/dashboard/export/sales/excel', [ExportsController::class, 'exportSalesExcel' ])->name('sales.excel');
Route::get('/dashboard/export/orders/pdf', [ExportsController::class, 'exportOrdersPDF' ])->name('orders.pdf');
Route::get('/dashboard/export/sales/pdf', [ExportsController::class, 'exportSalesPDF' ])->name('sales.pdf');

Route::get('/admin', [AdminController::class,'index'])->name('admin');
Route::get('/', function () {
 return redirect('dashboard/product');
})->middleware('auth');