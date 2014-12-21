<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{

    use SoftDeletingTrait, ValidatingTrait;

}