<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function Login(LoginRequest $loginRequest){
        $loginResult = $this->authService->Login($loginRequest->convertToDto());
        if(isset($loginResult["error"])) {return errorResponse($loginResult["error"]);}
        return successResponse($loginResult["data"]);
    }


}
