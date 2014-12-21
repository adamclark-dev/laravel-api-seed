<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

class PermissionToRole extends Eloquent
{

    use SoftDeletingTrait, ValidatingTrait;

    protected $table = 'permission_role';

}