<?php
Route::post('login', 'API\AuthController@login');
Route::group([ 'prefix' => 'view', 'namespace' => 'API'], function(){
    Route::any('{view_name?}', 'ViewController@ajaxView')->where('any', '.*');
});
Route::middleware('jwt.auth')->group(function(){
    Route::post('/me','API\AuthController@postAuth' );
    Route::any('/logout', 'API\AuthController@logout');
    Route::group(['prefix' => 'resources', 'namespace' => 'API'], function(){
        Route::post('/', 'ResourceController@postResources');
    });
});