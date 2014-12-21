<?php

Route::api('v1', function () {

    /*
     * USER AUTHENTICATION (LOGIN)
     */
    Route::get('authenticate', 'AuthenticationController@postAuthenticate');

    /*
     * USER
     */
    Route::group(['prefix' => 'user', 'protected' => true], function() {

        Route::get('/', 'UsersController@getUser');

    });

    /*
     * USERS
     */
    Route::group(['prefix' => 'users', 'protected' => true], function() {

        Route::get('/{user_id}/roles/add', 'UACController@postAddUserRole');
        Route::get('/{user_id}/roles/remove', 'UACController@postRemoveUserRole');

        Route::get('/create', 'UsersController@postCreateUser');

    });

    /*
     * USER ACCESS CONTROL
     */
    Route::group(['prefix' => 'uac', 'protected' => true], function() {

        Route::group(['prefix' => 'permissions'], function() {

            Route::get('/create', 'UACController@postCreatePermission');

            Route::get('/{permission_id}/add', 'UACController@postAddPermissionToRole');

        });

        Route::group(['prefix' => 'roles'], function() {

            Route::get('/create', 'UACController@postCreateRole');

        });


    });


});
