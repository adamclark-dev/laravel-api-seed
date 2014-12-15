<?php

use Zizaco\Entrust\EntrustPermission;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Permission extends EntrustPermission
{

    use SoftDeletingTrait;

}