<?php

namespace App\Domain\Api\Dto\Request\Auth;

class EmailActivationDto
{
    public $email;


    public function __construct(string $email) {
        $this->email = $email;
    }
}
