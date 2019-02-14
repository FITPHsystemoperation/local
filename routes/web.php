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
Route::resource('/staffs', 'StaffsController');
// Route::prefix('/staffs/{staff}')->name('staffs.')->group(function(){
//     Route::get('/working-data', 'StaffsController@editWork')->name('work.edit');
//     Route::patch('/working-data', 'StaffsController@updateWork')->name('work.update');
//     Route::get('/contact-information', 'StaffsController@editContact')->name('contact.edit');
//     Route::patch('/contact-information', 'StaffsController@updateContact')->name('contact.update');
//     Route::get('/emergency', 'StaffsController@editEmergency')->name('emergency.edit');
//     Route::patch('/emergency', 'StaffsController@updateEmergency')->name('emergency.update');
//     Route::get('/account', 'StaffsController@editAccount')->name('account.edit');
//     Route::patch('/account', 'StaffsController@updateAccount')->name('account.update');
//     Route::get('/personal', 'StaffsController@editPersonal')->name('personal.edit');
//     Route::patch('/personal', 'StaffsController@updatePersonal')->name('personal.update');
// });

Route::resource('/departments', 'DepartmentsController');

Route::resource('/computers', 'ComputersController');
Route::resource('/computers/{computer}/account', 'ComputerAccountController', ['as' => 'computers']);

// Route::get('/computer/{computer}/software/create', 'ComputerSoftwareController@index');
// Route::get('/computer/{computer}/software/{software}/create', 'ComputerSoftwareController@create');
// Route::post('/computer/{computer}/software/{software}/create', 'ComputerSoftwareController@store');
// Route::get('/computer-software/{computer_software}/edit', 'ComputerSoftwareController@edit');
// Route::post('/computer-software/{computer_software}/edit', 'ComputerSoftwareController@update');

// Route::get('/computer/{id}/mouse', 'ComputerMouseController@index');
// Route::post('/computer/{id}/mouse/add', 'ComputerMouseController@store');
// Route::post('/computer/mouse/{mouse_id}/remove', 'ComputerMouseController@destroy');

// Route::get('/computer/{id}/keyboard', 'ComputerKeyboardController@index');
// Route::post('/computer/{id}/keyboard/add', 'ComputerKeyboardController@store');
// Route::post('/computer/keyboard/{keyboard_id}/remove', 'ComputerKeyboardController@destroy');

// Route::get('/computer/{id}/monitor', 'ComputerMonitorController@index');
// Route::post('/computer/{id}/monitor/add', 'ComputerMonitorController@store');
// Route::post('/computer/monitor/{monitor_id}/remove', 'ComputerMonitorController@destroy');

// Route::get('/computer/{id}/charger', 'ComputerChargerController@index');
// Route::post('/computer/{id}/charger/add', 'ComputerChargerController@store');
// Route::post('/computer/charger/{charger_id}/remove', 'ComputerChargerController@destroy');

// Route::post('/mouses/create', 'MousesController@store');
// Route::post('/keyboards/create', 'KeyboardsController@store');
// Route::post('/monitors/create', 'MonitorsController@store');
// Route::post('/chargers/create', 'ChargersController@store');

// Route::get('/softwares', 'SoftwaresController@index');
// Route::get('/softwares/create', 'SoftwaresController@create');
// Route::post('/softwares/create', 'SoftwaresController@store');
// Route::get('/software/{software}', 'SoftwaresController@show');
// Route::get('/software/{software}/edit', 'SoftwaresController@edit');
// Route::post('/software/{software}/edit', 'SoftwaresController@update');


// Route::get('/document/categories', 'DocumentCategoriesController@index');
// Route::get('/document/categories/create', 'DocumentCategoriesController@create');
// Route::post('/document/categories/create', 'DocumentCategoriesController@store');
// Route::get('/document/category/{category}/edit', 'DocumentCategoriesController@edit');
// Route::post('/document/category/{category}/edit', 'DocumentCategoriesController@update');
// Route::get('/document/category/{category}', 'DocumentCategoriesController@show');

// Route::get('/documents', 'DocumentsController@index');
// Route::get('/documents/create', 'DocumentsController@create');
// Route::post('/documents/create', 'DocumentsController@store');
// Route::get('/document/{document}', 'DocumentsController@show');
// Route::post('/document/{document}/upload', 'DocumentsController@addFile');
// Route::get('/document/{document}/edit', 'DocumentsController@edit');
// Route::post('/document/{document}/edit', 'DocumentsController@update');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/', function(){
    return view('pages.home');
})->name('home');

// Route::get('/profile/{name}', 'PagesController@profile');
// Route::get('/select-theme/{theme}', 'ThemesController@preview');
// Route::post('/themes/{theme}/apply', 'ThemesController@apply');

// Route::resource('themes', 'ThemesController');

// Route::get('/test', 'TestController@index');//for testing
