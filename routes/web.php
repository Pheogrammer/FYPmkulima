<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\SMSandUSSDController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ViewerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bei',[ViewerController::class,'bei'])->name('bei');
Route::get('beimazao/{id}',[ViewerController::class,'beimazao'])->name('beimazao');

Auth::routes();




Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
    Route::get('/agencies', [AgencyController::class, 'index'])->name('agencies');
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('registeruser', [UsersController::class, 'registeruser'])->name('registeruser');
    Route::get('edituser/{id}', [UsersController::class, 'edituser'])->name('edituser');
    Route::post('saveRegisteredUser', [UsersController::class, 'saveRegisteredUser'])->name('saveRegisteredUser');
    Route::post('saveEditedUser', [UsersController::class, 'saveEditedUser'])->name('saveEditedUser');
    Route::get('deactivateUser/{id}', [UsersController::class, 'deactivateUser'])->name('deactivateUser');
    Route::get('activateUser/{id}', [UsersController::class, 'activateUser'])->name('activateUser');

    Route::get('registeragency', [AgencyController::class, 'registeragency'])->name('registeragency');
    Route::post('saveRegisteredAgency', [AgencyController::class, 'saveRegisteredAgency'])->name('saveRegisteredAgency');
    Route::get('editagency/{id}', [AgencyController::class, 'editagency'])->name('editagency');
    Route::post('saveEditedAgency', [AgencyController::class, 'saveEditedAgency'])->name('saveEditedAgency');

    Route::get('zone', [HomeController::class, 'zone'])->name('zone');
    Route::get('registerzone', [HomeController::class, 'registerzone'])->name('registerzone');
    Route::post('saveRegisteredZone', [HomeController::class, 'saveRegisteredZone'])->name('saveRegisteredZone');
    Route::get('editzone/{id}', [HomeController::class, 'editzone'])->name('editzone');
    Route::post('saveEditedZone', [HomeController::class, 'saveEditedZone'])->name('saveEditedZone');
    Route::get('assignRegiontoZone/{id}', [HomeController::class, 'assignRegiontoZone'])->name('assignRegiontoZone');
    Route::post('saveAssignedRegion', [HomeController::class, 'saveAssignedRegion'])->name('saveAssignedRegion');

    Route::get('region', [HomeController::class, 'region'])->name('region');
    Route::get('registerRegion', [HomeController::class, 'registerRegion'])->name('registerRegion');
    Route::post('saveRegisteredRegion', [HomeController::class, 'saveRegisteredRegion'])->name('saveRegisteredRegion');
    Route::get('editRegion/{id}', [HomeController::class, 'editregion'])->name('editregion');
    Route::post('saveEditedRegion', [HomeController::class, 'saveEditedRegion'])->name('saveEditedRegion');

    Route::get('crops', [HomeController::class, 'crops'])->name('crops');
    Route::get('registerCrop', [HomeController::class, 'registerCrop'])->name('registerCrop');
    Route::post('saveRegisteredCrop', [HomeController::class, 'saveRegisteredCrop'])->name('saveRegisteredCrop');
    Route::get('editcrop/{id}', [HomeController::class, 'editcrop'])->name('editcrop');
    Route::post('saveeditedcrop', [HomeController::class, 'saveeditedcrop'])->name('saveeditedcrop');

    Route::get('prices', [HomeController::class, 'prices'])->name('prices');
    Route::get('registerprice', [HomeController::class, 'registerprice'])->name('registerprice');
    Route::post('saveRegisteredPrice', [HomeController::class, 'saveRegisteredPrice'])->name('saveRegisteredPrice');
    Route::get('editprice/{id}', [HomeController::class, 'editprice'])->name('editprice');
    Route::post('saveEditedprice', [HomeController::class, 'saveEditedprice'])->name('saveEditedprice');
    Route::get('manageCropsandPrices/{id}', [HomeController::class, 'manageCropsandPrices'])->name('manageCropsandPrices');

    Route::get('manageNews', [HomeController::class, 'manageNews'])->name('manageNews');
    Route::post('saveNews', [HomeController::class, 'saveNews'])->name('saveNews');
    Route::post('saveEditedNews', [HomeController::class, 'saveEditedNews'])->name('saveEditedNews');
});

//
