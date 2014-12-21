<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

class AssignedRole extends Eloquent
{

    use SoftDeletingTrait, ValidatingTrait;

    protected $table = 'assigned_roles';

}