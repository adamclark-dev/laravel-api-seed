<?php

class UserTransformer extends \League\Fractal\TransformerAbstract
{

    public function transform(User $user)
    {

        $response = [];
        $response['id'] = intval($user->id);
        $response['email'] = $user->email;

        if($user->hasRole('Admin')){

            $response['admin'] = true;

        }
        else{

            $response['admin'] = false;

        }

        return $response;

    }

}