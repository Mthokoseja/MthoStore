<?php

use App\http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CartComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/',HomeComponent::class);
Route:: get('/shop',ShopComponent::class);
Route:: get('/cart',CartComponent::class);
Route:: get('/checkout',CheckoutComponent::class);
Route:: get('/user/dashboard',UserDashboardComponent::class);
Route:: get('/admin/dashboard',AdminDashboardComponent::class);



/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

//route for user or customer
Route::middleware(['auth:sanctum',])->group(function(){ 
Route:: get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard'); 
    
    
    });
    
    //route for Admin
    Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route:: get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    
    
    
    });
