<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'front.',
    'namespace' => 'Front',
], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'MainController@index',
    ]);
});

Auth::routes(['register' => false]);
