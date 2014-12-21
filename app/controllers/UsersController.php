<?php

class UsersController extends BaseController
{

    public function postCreateUser()
    {

        $user = new User;
        $user->email = Input::get('email');
        $user->firstname = Input::get('firstname');
        $user->surname = Input::get('surname');
        $user->password = Hash::make( Input::get('password') );
        $user->save();

        return $this->response->item($user, new UserTransformer());

    }

    public function getUser()
    {

        return $this->response->item(Auth::user(), new UserTransformer());

    }


}