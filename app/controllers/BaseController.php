<?php

use Illuminate\Routing\Controller;
use Dingo\Api\Routing\ControllerTrait;

class BaseController extends Controller
{

    use ControllerTrait;

    public $data;

    public function respondData(){

        $response = [];
        $response['data'] = $this->data;

        return $response;

    }

}