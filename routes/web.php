<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ClerkController;
use App\Http\Controllers\Backend\UserController;


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

require __DIR__ . '/auth.php';
/** Admin Routes */
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


/** Clerk Routes */
Route::get('clerk/dashboard', [ClerkController::class, 'dashboard'])->name('clerk.dashboard');


/** User Routes
 * The user is directed to the dashboard path that it shows the view views/user/dashboard
 */

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
