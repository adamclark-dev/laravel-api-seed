<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PermissionToRole extends Eloquent
{

    use SoftDeletingTrait;

    protected $table = 'permission_role';

}