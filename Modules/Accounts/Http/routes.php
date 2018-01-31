<?php

Route::group(['middleware' => 'web', 'prefix' => 'accounts', 'namespace' => 'Modules\Accounts\Http\Controllers'], function()
{
    Route::get('/', 'AccountsController@index');
});
