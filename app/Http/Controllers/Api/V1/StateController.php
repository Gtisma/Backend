<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\StateService;

class StateController extends Controller
{
    protected $stateService;

    public function __construct(StateService $stateService)
    {
        $this->stateService = $stateService;
    }
    public function getStates(){

       return successResponse($this->stateService->all());
    }



}
