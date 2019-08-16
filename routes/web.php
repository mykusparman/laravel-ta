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

// route bawaan
Route::get('/', function () {
    return redirect('/donatur');
});

Auth::routes();

// Route Admin
Route::get('admin/','AdminController@index')->middleware(['auth']);

Route::get('sokmul/tampil','SokmulController@index');
Route::get('sokmul/tambah','SokmulController@create');
Route::post('sokmul/simpan','SokmulController@store');
Route::get('sokmul/edit/{id}','SokmulController@edit');
Route::put('sokmul/update/{id}','SokmulController@update');
Route::get('sokmul/hapus/{id}','SokmulController@destroy');

Route::get('user/tampil','AdminController@show_user');
Route::get('user/tambah','AdminController@create_user');
Route::post('user/simpan','AdminController@store_user');
Route::get('user/edit/{id}','AdminController@edit_user');
Route::put('user/update/{id}','AdminController@update_user');
Route::get('user/hapus/{id}','AdminController@destroy_user');

Route::post('campaign/ambil/{id}','CampaignController@ambil');
Route::get('campaign/tampil','CampaignController@index');
Route::get('campaign/pilih','CampaignController@choose');
Route::get('campaign/updatestatus/{id}','CampaignController@update_status');
Route::get('campaign/tambah/{id}','CampaignController@create');
Route::post('campaign/simpan','CampaignController@store');
Route::get('campaign/detail/{id}','CampaignController@detail');
Route::get('campaign/edit/{id}','CampaignController@edit');
Route::patch('campaign/update/{id}','CampaignController@update');
Route::get('campaign/hapus/{id}','CampaignController@destroy');


// Route Bendahara
Route::get('bendahara/','BendaharaController@index')->middleware(['auth']);
Route::get('donation/tampil','DonationController@list');
Route::get('donation/updatestatus/{id}','DonationController@update_status');
Route::get('/email/tambah','EmailController@create');
Route::post('/email/kirim','EmailController@sendEmail');
Route::get('laporan/tampil','LaporanController@list');
Route::get('laporan/tambah/{id}','LaporanController@create');
Route::post('laporan/simpan','LaporanController@store');

// Route Donatur
Route::get('/donatur','DonaturController@index');
Route::get('/donate','DonationController@index');
Route::get('/donate/ambil/{id}','DonationController@ambil');
Route::post('/donate/store','DonationController@submitDonation')->name('donation.store');
Route::get('/notification/handler','DonationController@notificationHandler');
Route::get('/donate/finish','DonationController@finish');
Route::get('/donatur/dashboard','DonaturController@dashboard');
Route::get('/donatur/list','DonaturController@listdonation');


// Route::get('/home', 'HomeController@index')->name('home');
