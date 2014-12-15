<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AssignedRole extends Eloquent
{

    use SoftDeletingTrait;

    protected $table = 'assigned_roles';

}