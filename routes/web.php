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

Route::get('/computers', 'ComputersController@index');
Route::get('/computers/create', 'ComputersController@create');
Route::post('/computers/create', 'ComputersController@store');
Route::get('/computer/{computer}', 'ComputersController@show');
Route::get('/computer/{computer}/edit', 'ComputersController@edit');
Route::post('/computer/{computer}', 'ComputersController@update');

Route::get('/computer/{id}/account/create', 'ComputerAccountController@create');
Route::post('/computer/{id}/account/create', 'ComputerAccountController@store');
Route::get('/computer-account/{account}/edit', 'ComputerAccountController@edit');
Route::post('/computer-account/{account}/edit', 'ComputerAccountController@update');
Route::post('/computer-account/{account}/delete', 'ComputerAccountController@destroy');

Route::get('/computer/{id}/mouse', 'ComputerMouseController@index');
Route::post('/computer/{id}/mouse/add', 'ComputerMouseController@store');
Route::post('/computer/mouse/{mouse_id}/remove', 'ComputerMouseController@destroy');

Route::get('/computer/{id}/keyboard', 'ComputerKeyboardController@index');
Route::post('/computer/{id}/keyboard/add', 'ComputerKeyboardController@store');
Route::post('/computer/keyboard/{keyboard_id}/remove', 'ComputerKeyboardController@destroy');

Route::get('/computer/{id}/monitor', 'ComputerMonitorController@index');
Route::post('/computer/{id}/monitor/add', 'ComputerMonitorController@store');
Route::post('/computer/monitor/{monitor_id}/remove', 'ComputerMonitorController@destroy');

Route::get('/computer/{id}/charger', 'ComputerChargerController@index');
Route::post('/computer/{id}/charger/add', 'ComputerChargerController@store');
Route::post('/computer/charger/{charger_id}/remove', 'ComputerChargerController@destroy');

Route::post('/mouses/create', 'MousesController@store');
Route::post('/keyboards/create', 'KeyboardsController@store');
Route::post('/monitors/create', 'MonitorsController@store');
Route::post('/chargers/create', 'ChargersController@store');

Route::get('/staffs', 'StaffsController@index');
Route::get('/staffs/create', 'StaffsController@create');
Route::post('/staffs/create', 'StaffsController@store');
Route::get('/staff/{staff}', 'StaffsController@show');
Route::get('/staff/{staff}/edit', 'StaffsController@edit');
Route::post('/staff/{staff}/edit', 'StaffsController@update');
Route::get('/staff/{staff}/working-data', 'StaffsController@editWorkingData');
Route::post('/staff/{staff}/working-data', 'StaffsController@updateWorkingData');
Route::get('/staff/{staff}/contact-information', 'StaffsController@editContactInfo');
Route::post('/staff/{staff}/contact-information', 'StaffsController@updateContactInfo');
Route::get('/staff/{staff}/emergency', 'StaffsController@editEmergency');
Route::post('/staff/{staff}/emergency', 'StaffsController@updateEmergency');
Route::get('/staff/{staff}/account', 'StaffsController@editAccount');
Route::post('/staff/{staff}/account', 'StaffsController@updateAccount');
Route::get('/staff/{staff}/personal', 'StaffsController@editPersonal');
Route::post('/staff/{staff}/personal', 'StaffsController@updatePersonal');
Route::post('/staff/{staff}/delete', 'StaffsController@destroy');

Route::get('/departments', 'DepartmentsController@index');
Route::get('/departments/create', 'DepartmentsController@create');
Route::post('/departments/create', 'DepartmentsController@store');
Route::get('/department/{department}', 'DepartmentsController@show');
Route::get('/department/{department}/edit', 'DepartmentsController@edit');
Route::post('/department/{department}/edit', 'DepartmentsController@update');

Route::get('/softwares', 'SoftwaresController@index');
Route::get('/softwares/create', 'SoftwaresController@create');
Route::post('/softwares/create', 'SoftwaresController@store');
Route::get('/software/{software}', 'SoftwaresController@show');
Route::get('/software/{software}/edit', 'SoftwaresController@edit');
Route::post('/software/{software}/edit', 'SoftwaresController@update');

Route::get('/computer/{computer}/software/create', 'ComputerSoftwareController@index');
Route::get('/computer/{computer}/software/{software}/create', 'ComputerSoftwareController@create');
Route::post('/computer/{computer}/software/{software}/create', 'ComputerSoftwareController@store');
Route::get('/computer-software/{computer_software}/edit', 'ComputerSoftwareController@edit');
Route::post('/computer-software/{computer_software}/edit', 'ComputerSoftwareController@update');

Route::get('/document/categories', 'DocumentCategoriesController@index');
Route::get('/document/categories/create', 'DocumentCategoriesController@create');
Route::post('/document/categories/create', 'DocumentCategoriesController@store');
Route::get('/document/category/{category}/edit', 'DocumentCategoriesController@edit');
Route::post('/document/category/{category}/edit', 'DocumentCategoriesController@update');

Route::get('/documents', 'DocumentsController@index');
Route::get('/documents/create', 'DocumentsController@create');
Route::post('/documents/create', 'DocumentsController@store');
Route::get('/document/{document}', 'DocumentsController@show');
Route::post('/document/{document}/upload', 'DocumentsController@fileUpload');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/', function(){
	return view('home');
})->name('home');
// Auth::routes();
Route::get('/profile/{name}', 'PagesController@profile');
