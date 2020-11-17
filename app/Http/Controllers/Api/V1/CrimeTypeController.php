<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\CrimeTypeService;

class CrimeTypeController extends Controller
{
    protected $crimeTypeService;

    public function __construct(CrimeTypeService $crimeTypeService)
    {
        $this->crimeTypeService = $crimeTypeService;
    }
    public function getCrimeTypes(){

       return successResponse($this->crimeTypeService->all());
    }



}
