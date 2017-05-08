<?php

namespace App\Http\Controllers;

user App\Common\Util\Assert;

/**
* BaseRestController
*
* Common CRUD endpoints
*/
class BaseRestController extends Controller
{

    /**
     * Service, handling the business logic for the controller's resource
     * @var IService
     */
    protected $service;

    function __construct(IService $service)
    {
        Assert::notNull($service, '$service');
        $this->service = $service;
    }

    public function get(Request $request) {

    }

    public function post() {

    }

    public function put() {

    }

    public function patch() {

    }

    public function delete() {

    }
}