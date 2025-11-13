<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CatalogMetadataController;
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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // licenses
    Route::get('license', 'LicenseController@index')->name('license');
    
    // accessories
    Route::get('accessories', 'AccessoriesController@index')->name('accessories');

    // components
    Route::get('components', 'ComponentsController@index')->name('components');

    // consumables
    Route::get('consumables', 'ConsumablesController@index')->name('consumables');

    // predefined kits
    Route::get('predefinedkits', 'PredefinedKitsController@index')->name('predefinedkits');
});

Route::get('password/reset', function () {
    return view('auth.passwords.email');
})->name('password.request');

Route::post('password/reset', function () {
    return redirect()->route('password.otp');
})->name('password.email');

Route::get('password/otp', function () {
    return view('auth.passwords.otp');
})->name('password.otp');

Route::post('password/otp', function () {
    return redirect()->route('password.customreset');
})->name('password.verify');

Route::get('password/custom-reset', function () {
    return view('auth.passwords.reset');
})->name('password.customreset');
