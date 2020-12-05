<?php

namespace App\Http\Requests\Api\UserOtp;

use App\Domain\Api\Dto\Request\UserOtp\PasswordConfirmOtpDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class CreateRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string otp
 * @property string password
 */
class PasswordConfirmOtpRequest extends BaseApiRequest
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
            'otp' => 'required',
            'password' => [
                'min:8',
                'required',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ];
    }
    public function messages()
    {
        return [
            'password.regex' => 'Password must have Uppercase, Lowercase, Number and Special Character',
        ];
    }

    public function convertToDto(): PasswordConfirmOtpDto
    {
        return new PasswordConfirmOtpDto($this->email, $this->otp,$this->password);
    }
}
