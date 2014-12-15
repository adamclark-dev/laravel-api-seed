<?php

Route::api('v1', function () {

    Route::get('authenticate', 'AuthenticationController@postAuthenticate');

    Route::group(['prefix' => 'user', 'protected' => true], function() {

        Route::get('/', 'UsersController@getUser');

    });


});
