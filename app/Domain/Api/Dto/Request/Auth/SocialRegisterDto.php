<?php

namespace App\Domain\Api\Dto\Request\Auth;

class SocialRegisterDto
{
    public $email;
    public $phone;
    public $last_name;
    public $first_name;
    public $source;
    public $facebook_id;
    public $google_id;
    public $twitter_id;
    public $gender_id;
    public $firebase_token;
    public $device_id;
    public $picture_url;


    public function __construct(string $email, string $phone=null,string $last_name,string $first_name,string $facebook_id=null,string $google_id=null,string $twitter_id=null,string $source=null,string $picture_url=null,int $gender_id=null,string $firebase_token = null,string $device_id =null) {
        $this->email = $email;
        $this->phone = $phone;
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->gender_id = $gender_id;
        $this->firebase_token = $firebase_token;
        $this->device_id = $device_id;
        $this->facebook_id = $facebook_id;
        $this->google_id = $google_id;
        $this->twitter_id = $twitter_id;
        $this->source = $source;
        $this->picture_url = $picture_url;
    }
}
