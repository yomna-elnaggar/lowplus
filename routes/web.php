<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IssuesController;
use App\Http\Controllers\Dashboard\SessionController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\JobtitleController;
use App\Http\Controllers\Dashboard\TaxtypesController;
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
Route::post('/issues/update-case/{id}', [IssuesController::class, 'updateCase']);
Route::post('/issues/update-phase/{id}', [IssuesController::class, 'updatePhase']);

Route::view('calendar', 'dashboard.calendar');

Route::resource('issues_type', IssuesTypeController::class);
Route::resource('issues_case', IssuesCaseController::class);
Route::resource('issues_phase', IssuesPhaseController::class);
Route::resource('sessions', SessionController::class);
Route::resource('employee', EmployeeController::class);
Route::post('/employee/update-status', [EmployeeController::class, 'updateStatus'])->name('employee.updateStatus');

Route::resource('category', CategoryController::class);
Route::resource('jobtitle', JobtitleController::class);
Route::post('/jobtitle/update-status', [JobtitleController::class, 'updateStatus'])->name('jobtitle.update-status');
Route::post('/category/update-status', [CategoryController::class, 'updateStatus'])->name('category.update-status');

Route::get('calendar', [SessionController::class, 'calendar'])->name('sessions.calendar');

Route::resource('taxtype', TaxtypesController::class);
Route::post('/taxtype/update-status', [TaxtypesController::class, 'updateStatus'])->name('taxtype.updateStatus');

Route::view('role', 'dashboard.employee.role');
Route::view('role/create', 'dashboard.employee.roleForm');
Auth::routes();
