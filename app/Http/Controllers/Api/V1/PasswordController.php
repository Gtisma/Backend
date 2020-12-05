<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserOtp\PasswordConfirmOtpRequest;
use App\Http\Requests\Api\UserOtp\ResendOtpRequest;
use App\Services\UserService;


class PasswordController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function Reset(ResendOtpRequest $resendOtpRequest){
        $resendResult = $this->userService->resendOtp($resendOtpRequest->convertToDto());
        if(isset($resendResult["error"])) {return errorResponse($resendResult["error"],$resendResult["code"]??401);}
        return successResponse($resendResult["data"]);
    }
    public function updatePassword(PasswordConfirmOtpRequest $passwordConfirmOtpRequest){
        $registerResult = $this->userService->confirmOtp($passwordConfirmOtpRequest->convertToDto());
        if(isset($registerResult["error"])) {return errorResponse($registerResult["error"],422);}
        return successResponse($registerResult["data"]);
    }


}
