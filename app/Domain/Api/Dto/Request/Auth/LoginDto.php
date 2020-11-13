<?php

namespace App\Domain\Api\Dto\Request\Auth;

class LoginDto
{
    public $password;
    public $email;


    public function __construct(string $email, string $password) {
        $this->password = $password;
        $this->email = $email;
    }
}
