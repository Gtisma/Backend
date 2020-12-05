<?php

namespace App\Domain\Api\Dto\Request\UserOtp;

class PasswordConfirmOtpDto
{
    public $otp;
    public $email;
    public $password;


    public function __construct(string $email, string $otp,string  $password) {
        $this->otp = $otp;
        $this->email = $email;
        $this->password = $password;
    }
}
