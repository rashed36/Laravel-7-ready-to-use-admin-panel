<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth' , 'admin']], function(){

	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/Admin/Setting', 'Admin\settingController@setting')->name('setting');

Route::get('/profile', 'Admin\ProfileController@index')->name('profile');
Route::post('/profile/update', 'Admin\ProfileController@updateProfile')->name('profile.update');

Route::get('/change-password', 'Admin\ChangePasswordController@index')->name('changePass');
Route::post('change-password', 'Admin\ChangePasswordController@store')->name('change.password');

Route::get('/Role/Permation', 'Admin\RoleController@rolePermission')->name('role');
Route::get('/Role/Edit/{id}', 'Admin\RoleController@role_edit')->name('role-edit');
Route::post('/Role/Update/{id}', 'Admin\RoleController@role_update')->name('role_permission_update');
// Route::get('/Role/Delete/{id}', 'Admin\RoleController@role_delete')->name('role-delete');

Route::delete('/role-delete/{id}','Admin\RoleController@role_delete');


});
