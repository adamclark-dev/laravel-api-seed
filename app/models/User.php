<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use HasRole, RemindableTrait, UserTrait, SoftDeletingTrait, ValidatingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $hidden = array('password', 'remember_token');


}
