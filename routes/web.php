<?php

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

// Basic Routes
Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/login', function () {
    return view('login');
});

Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');

Route::get('/register/invite', function () { return view('auth.invite'); });
Route::get('/register/complete', 'Auth\RegisterController@completeRegistration');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

// Utilities Route
Route::get('/phpinfo', function () {
    phpinfo();
});

// Resource Routes
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('companies', 'CompanyController');

// Application Routes
Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth', '2fa']);

// Admin Routes
Route::get('/admin/companies', 'CompanyController@index')->name('admin/company')->middleware(['auth', '2fa']);
