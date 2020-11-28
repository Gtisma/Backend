<?php

namespace App\Http\Requests\Api\UserOtp;

use App\Domain\Api\Dto\Request\UserOtp\ResendOtpDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class CreateRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 */
class ResendOtpRequest extends BaseApiRequest
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
        ];
    }

    public function convertToDto(): ResendOtpDto
    {
        return new ResendOtpDto($this->email);
    }
}
