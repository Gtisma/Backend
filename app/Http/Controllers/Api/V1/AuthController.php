<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function Login(LoginRequest $loginRequest){
        $loginResult = $this->authService->Login($loginRequest->convertToDto());
        if(isset($loginResult["error"])) {return errorResponse($loginResult["error"],$loginRequest["code"]??401);}
        return successResponse($loginResult["data"]);
    }
    public function Register(RegisterRequest $registerRequest){
        $registerResult = $this->authService->Register($registerRequest->convertToDto());
        if(isset($registerResult["error"])) {return errorResponse($registerResult["error"],422);}
        return successResponse($registerResult["data"]);
    }


}
