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

Route::resource('/', 'IndexController');

Route::resource('dashboard', 'DashboardController');

Route::resource('login', 'LoginController');

Route::resource('logout', 'LogoutController');

Route::resource('dashboard', 'DashboardController');

Route::resource('clientorder', 'ClientOrderController');

Route::resource('useraccount', 'UserAccountController');

Route::resource('clientaccount', 'ClientAccountController');

Route::resource('manufactureraccount', 'ManufacturerAccountController');

Route::resource('supplieraccount', 'SupplierAccountController');

Route::resource('manufacturerorder', 'ManufacturerOrderController');

Route::resource('manufacturerorderdetail', 'ManufacturerOrderDetailController');

Route::resource('supplierorder', 'SupplierOrderController');

Route::resource('supplierorderdetail', 'SupplierOrderDetailController');

Route::resource('schedule', 'ScheduleController');

Route::resource('scheduledetail', 'ScheduleDetailController');

Route::resource('product', 'ProductController');

Route::resource('supply', 'SupplyController');

Route::resource('supplydetail', 'SupplyDetailController');

Route::get('supplydetailz/{id}', 'SupplyDetailController@getSupply')->name('appdev.supplydetailz');

Route::resource('salesreport', 'SalesReportController');

Route::post('salesreport', 'SalesReportController@generateReport')->name('appdev.salesreport');

Route::resource('inventoryreport', 'InventoryReportController');

Route::resource('notifications', 'NotificationController');

Route::resource('driverdetail', 'DriverDetailController');

Route::resource('truck', 'TruckController');

Route::resource('truckdetail', 'TruckDetailController');

Route::get('truckdetailz/{id}', 'TruckDetailController@getTruck')->name('appdev.truckdetailz');

Route::get('driver/{id}', 'DriverController@getDriver')->name('appdev.driver');

Route::get('sched_det/{id}', 'ScheduleDetailController@getSchedule')->name('appdev.scheduledetail');
Route::post('/schedule/getCapacity','ScheduleController@getCurrCapacity');
Route::resource('driver', 'DriverController');

