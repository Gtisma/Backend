<?php

namespace App\Services;


use App\Domain\Api\Dto\Request\Auth\LoginDto;
use App\Domain\Helpers\Constants;
use App\Domain\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AuthService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function Login(LoginDto $loginDto)
    {
        $user = $this->userRepository->findOne([User::EMAIL=>$loginDto->email]);
        if($user == null) return ["error"=>"Email does not belong to a user, Try Again"];
        if($user->is_active != Constants::Active["Active"]) return ["error"=>"User Account is inactive"];
        if($user->block == Constants::Active["Active"]) return ["error"=>"User is Blocked, contact admin"];
        if($user->email_verified_at == null) return ["error"=>"Email has not been verified, please check your email"];
        $token = auth('api')->attempt([User::EMAIL=>$loginDto->email,User::PASSWORD=>$loginDto->password]);
        if(!$token) return ["error"=>"Incorrect Password, Try Again","code",401];
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();
        return ["data"=>$token];


    }
    protected function generateTokenLocal (){
        do {
            $token = Hash::make(Str::random(80));
            Log::info($token);
        } while ($this->userRepository->findOne(["api_token"=>$token]) instanceof User);
        return $token;
    }
    protected function generateToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }


}
