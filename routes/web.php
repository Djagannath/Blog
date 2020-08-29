<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([])->prefix('admin')->group(function() {
  Route::get('panel', 'Admin\PanelController@index')->name('admin-panel');
});