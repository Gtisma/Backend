<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\RankService;

class RankController extends Controller
{
    protected $rankService;

    public function __construct(RankService $rankService)
    {
        $this->rankService = $rankService;
    }
    public function getRanks($id){
       return successResponse($this->rankService->findBySecurityId($id));
    }



}
