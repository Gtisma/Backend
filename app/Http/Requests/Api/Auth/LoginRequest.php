<?php

namespace App\Http\Requests\Api\Auth;

use App\Domain\Api\Dto\Request\Auth\LoginDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class LoginRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string password
 * @property string firebase_token
 * @property string device_id
 */
class LoginRequest extends BaseApiRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function convertToDto(): LoginDto
    {
        return new LoginDto($this->email, $this->password,$this->firebase_token,$this->device_id);
    }
}
