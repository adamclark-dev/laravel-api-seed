<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    use SoftDeletingTrait;

}