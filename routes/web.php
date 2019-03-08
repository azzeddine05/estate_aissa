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

/*Route::get('/', function () {
return view('welcome');
});*/
Route::get('/admin', 'AdminController@index');
Route::get('/employe-admin', 'AdminController@employe');

Route::get('/add_estate', 'EstateController@addEstate');
Route::get('/estate/details/{id}', 'EstateController@detailsEstate');
Route::get('/login', 'AdminController@login');
Route::post('/login', 'UserController@login');

Route::get('/logout', function() {
    Session::forget('employe');
    Session::forget('admin');
     if(!Session::has('employe'))
      {
         //return "signout";
         return redirect(url('login'));

      }
    });
Route::get('/employe/add', 'AdminController@indexAddEmploye');
Route::post('/add_Employe', 'AdminController@addEmploye');
Route::get('/admin/employes', 'AdminController@storeAllEmployes');
Route::get('/admin/employes/terms/{id}', 'AdminController@employeTerms');
Route::post('/estate/add', 'EstateController@createEstate');
Route::get('/admin-estate/enable/{id}', 'AdminController@enableEstate');
Route::get('/admin-estate/disable/{id}', 'AdminController@disableEstate');

Route::post('/tenant/add', 'TenantController@add');

Route::post('/add_depences', 'ExpencesController@addExpences');
Route::post('/add_revenu', 'RevenuesController@addRevenues');
Route::get('/admin/settings', 'AdminController@showSettings');
Route::post('/admin/settings', 'AdminController@changeSettings');
Route::get('/admin/estates-rents', 'AdminController@showRentsEstates');
Route::get('/admin/estates-admin', 'AdminController@showEstatesForAdminTerms');
Route::get('/admin/estates/all', 'AdminController@showAllEstatesOffres');
Route::get('/estate/buy/{id}', 'EstateController@buyEstate');
Route::get('/estate/rent/{id}', 'EstateController@rentEstate');
Route::post('/estate/buy', 'EstateController@confirmBuyEstate');

Route::get('/reports', 'ReportsController@index');
Route::get('/reports/details', 'ReportsController@showReportInvoice');

Route::get('/error404', 'AdminController@error404');
Route::get('/goBack', 'AdminController@goBackAfter404');
Route::post('/estatesBuyed', 'EstateController@estatesBuyed');
Route::post('/estatesRented', 'EstateController@estatesRented');





//return FrontEnd;
Route::get('/details-estate/{id}', 'HomeController@detailsEstate');
Route::get('/', 'HomeController@index');

Route::post('/flats', 'EstateController@estatesFlats');

Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session(['locale' =>$locale]);
   $backUrl =request()->get('backUrl');
   return redirect()->to($backUrl);
});





