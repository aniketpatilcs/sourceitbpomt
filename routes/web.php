<?php
 
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

  Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard') ;
  Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard') ;
  Route::get('/composeemail', [HomeController::class, 'composeemail'])->name('composeemail.add'); 
  Route::post('/insertemail', [HomeController::class, 'insertemail'])->name('composeemail.insert');
  Route::get('/viewcomposed', [HomeController::class, 'viewcomposed'])->name('viewcomposed');  
  require __DIR__.'/auth.php';
