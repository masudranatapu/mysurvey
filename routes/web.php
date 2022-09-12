<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('survey', [HomeController::class, 'survey'])->name('survey');
Route::get('survey-successfull', [HomeController::class, 'surveySuccessfull'])->name('survey.successfull');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Auth::user()->role_id == 1) {
        return redirect()->route('admin.dashboard');
    }
})->name('dashboard');

Route::group(['as'=>'admin.','prefix' => 'admin', 'namespace'=>'App\Http\Controllers\Admin','middleware'=>['auth','admin']], function () {
		
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('survey', 'DashboardController@survey')->name('survey');
    //profile
    Route::get('profile', 'SettingController@profile')->name('profile');
    Route::post('update-profile', 'SettingController@update_profile')->name('update-profile');
    Route::get('site-setting', 'SettingController@siteSetting')->name('site.setting');
    Route::post('site-setting-update/{id}', 'SettingController@siteSettingUpdate')->name('website.updated');

});
