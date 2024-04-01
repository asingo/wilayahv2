<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to(env('APP_HOST'));
});
Route::controller(\App\Http\Controllers\Wilayah::class)->group(function(){
    Route::get('provinces','provinces');
    Route::get('cities/{id}','cities');
    Route::get('districts/{id}','districts');
    Route::get('subdistricts/{id}','subdistricts');
    Route::get('postal/{id}','postal');
});
