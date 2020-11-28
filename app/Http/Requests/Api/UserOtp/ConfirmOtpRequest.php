<?php

namespace App\Http\Requests\Api\UserOtp;

use App\Domain\Api\Dto\Request\UserOtp\ConfirmOtpDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class CreateRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string otp
 */
class ConfirmOtpRequest extends BaseApiRequest
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
            'otp' => 'required'
        ];
    }

    public function convertToDto(): ConfirmOtpDto
    {
        return new ConfirmOtpDto($this->email, $this->otp);
    }
}
