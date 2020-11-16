<?php

namespace App\Http\Requests\Api\Auth;

use App\Domain\Api\Dto\Request\Auth\RegisterDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class CreateRequest
 * @package App\Http\Requests\Api\Auth
 * @property string email
 * @property string password
 * @property string phone
 * @property string last_name
 * @property string first_name
 * @property int gender_id
 */
class RegisterRequest extends BaseApiRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email','unique:users'],
            'phone' => ['required','unique:users','min:10','max:13'],
            'last_name' => 'required',
            'first_name' => 'required',
            'gender_id' => 'required',
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

    public function convertToDto(): RegisterDto
    {
        return new RegisterDto($this->email, $this->password,$this->phone,$this->first_name,$this->last_name,$this->gender_id);
    }
}
