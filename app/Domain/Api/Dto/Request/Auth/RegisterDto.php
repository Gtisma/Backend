<?php

namespace App\Domain\Api\Dto\Request\Auth;

class RegisterDto
{
    public $password;
    public $email;
    public $phone;
    public $last_name;
    public $first_name;
    public $gender_id;
    public $firebase_token;
    public $device_id;


    public function __construct(string $email, string $password, string $phone,string $last_name,string $first_name,int $gender_id,string $firebase_token = null,string $device_id =null) {
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->gender_id = $gender_id;
        $this->firebase_token = $firebase_token;
        $this->device_id = $device_id;
    }
}
