<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Zizaco\Entrust\EntrustRole;
use Watson\Validating\ValidatingTrait;

class Role extends EntrustRole
{

    use SoftDeletingTrait, ValidatingTrait;

}