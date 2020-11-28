<?php

namespace App\Domain\Api\Dto\Request\UserOtp;

class ResendOtpDto{

    public $email;


    public function __construct(string $email) {

        $this->email = $email;
    }
}
