<?php

// Route untuk umum

Route::get('/' , 'c_web@index');
Route::post('createRegristasi' , 'c_regristasi@postRegristasi')->name('postRegristasi');
Route::get('/resgristasii' , 'c_regristasi@regristasi')->name('regristasii');

//Batas umum

// Route untuk admin
Route::group(["middleware" => ["auth","checkRole:manager,karyawan"]] , function(){
    Route::resource('dashboard' , 'c_dashboard');
    Route::resource('/regristasi' , 'c_regristasi');
    Route::resource('/kios' , 'c_kios');
    Route::resource('/letter' , 'c_letter');
    Route::get('ajax.get.kios' , 'c_kios@getkios')->name('ajax-kios');
    Route::get('kecamatan' , 'c_kios@getkecamatan')->name('kecamatan');
    Route::get('letter/penunjukan/{id}' , 'c_letter@penunjukan')->name('penunjukan');
    Route::post('regristasi-ktp/{id}' , 'c_regristasi@getktp');
    Route::post('regristasi-siup/{id}' , 'c_regristasi@getsiup');
    Route::post('regristasi-tdp/{id}' , 'c_regristasi@gettdp');
    Route::post('detail-kios-ditolak/{id}' , 'c_regristasi@gettdp');
    Route::post('kios-ditolak' , 'c_kios@kiosditolak')->name('kios.ditolak');
    Route::resource('/file' , 'c_file');
    Route::delete('/kios/hapus/{id}', 'c_kios@hapus')->name('hapus');
    Route::get('/web' , 'c_web@web')->name('pengelolaan-web');
    Route::resource('/pengelolaan-web' , 'c_web');
    Route::get('/pesan' , 'c_pesan@index')->name('pesan');
    Route::post('/pesan/tambah' , 'c_pesan@store')->name('tambah-pesan');
    Route::delete('/pesan/hapus/{id}' , 'c_pesan@destroy')->name('hapus-pesan');

});

Route::group(["middleware" => ["auth", "checkRole:manager"]] , function(){
    Route::get('user' , 'c_user@index')->name('user-admin');
    Route::post('tambah' , 'c_user@store')->name('tambah-admin');
    Route::post('user/{id}', 'c_user@showdata');
    Route::post('kios/import' , 'c_kios@import')->name('import.kios');
    Route::match(['post','patch'],'user/ubah/{id}' , 'c_user@update');
});
//Batas admin

Auth::routes();
