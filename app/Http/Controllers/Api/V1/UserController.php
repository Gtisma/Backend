<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserOtp\ConfirmOtpRequest;
use App\Http\Requests\Api\UserOtp\ResendOtpRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function getUser(){

       return successResponse($this->userService->getLoggedInUser());
    }
    public function confirmOtp(ConfirmOtpRequest $confirmOtpRequest){
        $confirmOtp = $this->userService->verifyOtp($confirmOtpRequest->convertToDto());
        if(isset($confirmOtp["error"])) {return errorResponse($confirmOtp["error"],$confirmOtp["code"]??401);}
        return successResponse($confirmOtp["data"]);
    }
    public function resendOTPNow(ResendOtpRequest $resendOtpRequest){

        $resendOtp = $this->userService->resendOtp($resendOtpRequest->convertToDto());
        if(isset($resendOtp["error"])) {return errorResponse($resendOtp["error"],$resendOtp["code"]??401);}
        return successResponse($resendOtp["data"]);
    }




}
