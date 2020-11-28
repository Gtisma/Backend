<?php

namespace App\Domain\Api\Dto\Request\UserOtp;

class ConfirmOtpDto
{
    public $otp;
    public $email;


    public function __construct(string $email, string $otp) {
        $this->otp = $otp;
        $this->email = $email;
    }
}
