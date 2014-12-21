<?php

class UACController extends BaseController
{

    /*
     * USER PERMISSIONS
     */

        // CREATE PERMISSION
        public function postCreatePermission()
        {

            $permission = new Permission;
            $permission->name = Input::get('name');
            $permission->display_name = Input::get('display_name');
            $permission->save();

            $this->data['permission'] = $permission;

            return $this->respondData();

        }

        // ADD PERMISSION TO ROLE
        public function postAddPermissionToRole($permission_id)
        {

            $permission = new PermissionToRole;
            $permission->permission_id = $permission_id;
            $permission->role_id = Input::get('role_id');
            $permission->save();

            $this->data['permission_to_role'] = $permission;

            return $this->respondData();

        }

    /*
     * USER ROLES
     */

        // CREATE ROLE
        public function postCreateRole()
        {

            $role = new Role;
            $role->name = Input::get('name');
            $role->save();

            $this->data['role'] = $role;

            return $this->respondData();

        }

        // ADD USER ROLE
        public function postAddUserRole($user_id)
        {

            $assignedRole = new AssignedRole;
            $assignedRole->user_id = $user_id;
            $assignedRole->role_id = Input::get('role_id');
            $assignedRole->save();

            $this->data['assigned_role'] = $assignedRole;

            return $this->respondData();

        }

        // REMOVE USER ROLE
        public function postRemoveUserRole($user_id)
        {

            $assignedRole = AssignedRole::where('user_id',$user_id)
                ->where('role_id', Input::get('role_id'))
                ->delete();

            $this->data['assigned_role'] = $assignedRole;

            return $this->respondData();

        }

}