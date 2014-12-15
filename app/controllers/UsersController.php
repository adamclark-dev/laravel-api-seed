<?php

class UsersController extends BaseController
{

    public function getUser()
    {

        return $this->response->item(Auth::user(), new UserTransformer());

    }


}