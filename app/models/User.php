<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use HasRole, RemindableTrait, UserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $hidden = array('password', 'remember_token');


}
