<?php

class UACController extends BaseController
{

    public function postAddUserRole($user_id)
    {

        $assignedRole = new AssignedRole;
        $assignedRole->user_id = $user_id;
        $assignedRole->role_id = Input::get('role_id');
        $assignedRole->save();

        $this->data['assigned_role'] = $assignedRole;

        return $this->respondData();

    }

    public function postPermission()
    {

        $permission = new Permission;
        $permission->name = Input::get('name');
        $permission->display_name = Input::get('display_name');
        $permission->save();

        $this->data['permission'] = $permission;

        return $this->respondData();

    }

    public function postPermissionToRole($permission_id)
    {

        $permission = new PermissionToRole;
        $permission->permission_id = $permission_id;
        $permission->role_id = Input::get('role_id');
        $permission->save();

        $this->data['permission_to_role'] = $permission;

        return $this->respondData();

    }

    public function postRole()
    {

        $role = new Role;
        $role->name = Input::get('name');
        $role->save();

        $this->data['role'] = $role;

        return $this->respondData();


    }

}