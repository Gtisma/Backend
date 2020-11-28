<?php

namespace App\Services;


use App\Domain\Api\Dto\Request\UserOtp\ConfirmOtpDto;
use App\Domain\Api\Dto\Request\UserOtp\ResendOtpDto;
use App\Domain\Helpers\Constants;
use App\Domain\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Collection;


class UserService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserById(int $userId): User
    {
        return $this->userRepository->findOrFail($userId);
    }

    public function getAllUsers(int $companyId): Collection
    {
        return $this->userRepository->findWhere([User::PHONE => $companyId]);
    }
    public function  getLoggedInUser(){
        $user = auth()->user();
        $user->roles;
        return $user;
    }

    public function verifyOtp( ConfirmOtpDto $confirmOtpDto){
        $user = $this->userRepository->findWhere([User::EMAIL=>$confirmOtpDto->email])->first();
        if($user === null) return ["error"=>"User not found"];

        $userotp =$user->userotp;
        if($userotp === null) return [ 'error' => 'User otp not set'];
        date_default_timezone_set('Africa/Lagos');
        if(date('Y-m-d H:i:s') > $userotp->expires_at )return ['error'=>'Otp expired, try again'];

        if($confirmOtpDto->otp !== $userotp->otp) return ['error'=>'Otp mismatch, try again'];
        $user->is_active = Constants::Active["Active"];
        $user->last_login = date('Y-m-d H:i:s');
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();
        $token = auth('api')->login($user);
        return ['data'=>$token];

    }

    public function resendOtp(ResendOtpDto $resendOtpDto){
        $user = $this->userRepository->findWhere([User::EMAIL=>$resendOtpDto->email])->first();
        if($user === null) return ["error"=>"User not found"];
        $userotp = $this->userRepository->storeUserOtp($user);
        return ['data' =>'Otp has been sent'];

    }




    public function findUserByEmail(string $email, sting $phone)
    {
        return $this->userRepository->where(
            [
                User::EMAIL => $email,
                User::PHONE => $phone,
            ]
        )->first();
    }


}
