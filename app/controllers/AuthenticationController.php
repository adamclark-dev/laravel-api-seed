<?php

class AuthenticationController extends BaseController
{

    public function postAuthenticate()
    {

        $credentials = Input::only('email', 'password');

        if( ! $token = JWTAuth::attempt($credentials)){
            throw new Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
        }

        $this->data['token'] = $token;

        return $this->respondData();

    }

}