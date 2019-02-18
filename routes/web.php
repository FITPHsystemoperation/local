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
Route::prefix('/staffs/{staff}')->name('staffs.')->group(function(){
    Route::get('/working-data', 'StaffsController@editWork')->name('work.edit');
    Route::patch('/working-data', 'StaffsController@updateWork')->name('work.update');
    Route::get('/contact-information', 'StaffsController@editContact')->name('contact.edit');
    Route::patch('/contact-information', 'StaffsController@updateContact')->name('contact.update');
    Route::get('/emergency', 'StaffsController@editEmergency')->name('emergency.edit');
    Route::patch('/emergency', 'StaffsController@updateEmergency')->name('emergency.update');
    Route::get('/account', 'StaffsController@editAccount')->name('account.edit');
    Route::patch('/account', 'StaffsController@updateAccount')->name('account.update');
    Route::get('/personal', 'StaffsController@editPersonal')->name('personal.edit');
    Route::patch('/personal', 'StaffsController@updatePersonal')->name('personal.update');
});
Route::resource('/departments', 'DepartmentsController');

Route::resource('/computers', 'ComputersController');
Route::resource('/computers/{computer}/account', 'ComputerAccountController', ['as' => 'computers']);
Route::prefix('/computers/{computer}')->name('computers.')->group(function(){
    Route::get('/software/select', 'ComputerSoftwareController@index')->name('software.index');
    Route::get('/software/{software}', 'ComputerSoftwareController@create')->name('software.create');
    Route::post('/software/{software}', 'ComputerSoftwareController@store')->name('software.store');
    Route::get('/software/{computer_software}/edit', 'ComputerSoftwareController@edit')->name('software.edit');
    Route::patch('/software/{computer_software}', 'ComputerSoftwareController@update')->name('software.update');
    Route::delete('/software/{computer_software}', 'ComputerSoftwareController@destroy')->name('software.destroy');
    Route::get('/mouse', 'MousesController@index')->name('mouse.index');
    Route::post('/mouse', 'MousesController@store')->name('mouse.store');
    Route::patch('/mouse', 'MousesController@attach')->name('mouse.attach');
    Route::patch('/mouse/{mouse}', 'MousesController@detach')->name('mouse.detach');
    Route::get('/keyboard', 'KeyboardsController@index')->name('keyboard.index');
    Route::post('/keyboard', 'KeyboardsController@store')->name('keyboard.store');
    Route::patch('/keyboard', 'KeyboardsController@attach')->name('keyboard.attach');
    Route::patch('/keyboard/{keyboard}', 'KeyboardsController@detach')->name('keyboard.detach');
    Route::get('/monitor', 'MonitorsController@index')->name('monitor.index');
    Route::post('/monitor', 'MonitorsController@store')->name('monitor.store');
    Route::patch('/monitor', 'MonitorsController@attach')->name('monitor.attach');
    Route::patch('/monitor/{monitor}', 'MonitorsController@detach')->name('monitor.detach');
    Route::get('/charger', 'ChargersController@index')->name('charger.index');
    Route::post('/charger', 'ChargersController@store')->name('charger.store');
    Route::patch('/charger', 'ChargersController@attach')->name('charger.attach');
    Route::patch('/charger/{charger}', 'ChargersController@detach')->name('charger.detach');
});
Route::resource('/softwares', 'SoftwaresController');
Route::resource('/document/category', 'DocumentCategoriesController', ['as' => 'document']);
Route::resource('/documents', 'DocumentsController');
Route::patch('/documents/{document}/addFile', 'DocumentsController@addFile')->name('documents.addFile');

Route::resource('themes', 'ThemesController');

// Route::get('/profile/{name}', 'PagesController@profile');
// Route::get('/select-theme/{theme}', 'ThemesController@preview');
// Route::post('/themes/{theme}/apply', 'ThemesController@apply');


// Route::get('/test', 'TestController@index');//for testing
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/', function(){
    return view('pages.home');
})->name('home');
