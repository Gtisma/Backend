<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\GenderService;

class GenderController extends Controller
{
    protected $genderService;

    public function __construct(GenderService $genderService)
    {
        $this->genderService = $genderService;
    }
    public function getGenders(){

       return successResponse($this->genderService->all());
    }



}
