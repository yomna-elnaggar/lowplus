<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IssuesController;
use App\Http\Controllers\Dashboard\SessionController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\IssuesCaseController;
use App\Http\Controllers\Dashboard\IssuesTypeController;
use App\Http\Controllers\Dashboard\IssuesPhaseController;

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

Route::post('/custom_login', 'HomeController@login')->name('custom_login');


Route::group(
    [
        // 'middleware' => ['auth'],
        'namespace'  => 'Dashboard'
    ], function(){ 
        Route::get('/', 'DashboardController@index')->name('dashboard.index'); 
 
        Route::resource('/roles', 'RoleController');
});

Route::resource('customer', CustomerController::class);
Route::resource('issues', IssuesController::class);
Route::resource('issues_type', IssuesTypeController::class);
Route::resource('issues_case', IssuesCaseController::class);
Route::resource('issues_phase', IssuesPhaseController::class);
Route::resource('sessions', SessionController::class);
Auth::routes();
