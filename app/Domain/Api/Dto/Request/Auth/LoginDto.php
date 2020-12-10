<?php

namespace App\Domain\Api\Dto\Request\Auth;

class LoginDto
{
    public $password;
    public $email;
    public $firebase_token;
    public $device_id;


    public function __construct(string $email, string $password,string $firebase_token = null, string $device_id = null) {
        $this->password = $password;
        $this->email = $email;
        $this->firebase_token = $firebase_token;
        $this->device_id = $device_id;
    }
}
