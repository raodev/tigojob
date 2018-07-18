<?php

Route::group(['namespace' => 'Front'], function(){
    Route::any('{alias?}/{sub_alias?}/{end_alias?}', 'HomeController@switcher')->where('any', '.*');
});
