<?php

namespace App\Http\Requests\Api\Auth;

use App\Domain\Api\Dto\Request\Auth\SocialRegisterDto;
use App\Http\Requests\Api\BaseApiRequest;
use Illuminate\Validation\Rule;


/**
 * Class SocialRegisterRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string last_name
 * @property string first_name
 * @property string firebase_token
 * @property string device_id
 * @property string source
 */
class SocialRegisterRequest extends BaseApiRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'source' => ['required', Rule::in(['facebook', 'google','twitter'])]

        ];
    }


    public function convertToDto(): SocialRegisterDto
    {
        return new SocialRegisterDto($this->email,$this->phone,$this->last_name,$this->first_name,$this->facebook_id,$this->google_id,$this->twitter_id,$this->source,$this->picture_url,$this->gender_id,$this->firebase_token,$this->device_id);
    }
}
