<?php

namespace App\Http\Requests\Api\Auth;

use App\Domain\Api\Dto\Request\Auth\EmailActivationDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class CreateRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string password
 */
class EmailActivationRequest extends BaseApiRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email']
        ];
    }

    public function convertToDto(): EmailActivationDto
    {
        return new EmailActivationDto($this->email);
    }
}
