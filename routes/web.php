<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\UserCausesController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\DisbudparController;
use App\Http\Controllers\TaskController;

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

// User
// Index
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('index');

//Expolre
Route::get('/explore', [ExploreController::class, 'index'])->name('explore.index');
Route::get('/hotel', [ExploreController::class, 'hotel'])->name('explore.hotel');
Route::get('/culinary', [ExploreController::class, 'culinary'])->name('explore.culinary');
Route::get('/shopping', [ExploreController::class, 'shopping'])->name('explore.shopping');
Route::get('/heritage', [ExploreController::class, 'heritage'])->name('explore.heritage');
Route::get('/tourismspot', [ExploreController::class, 'tourismspot'])->name('explore.tourismspot');
Route::get('/culture', [ExploreController::class, 'culture'])->name('explore.culture');
