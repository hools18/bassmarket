<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'namespace' => 'Admin',
], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'MainController@index',
    ]);
});
