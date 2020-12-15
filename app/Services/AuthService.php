<?php

namespace App\Services;


use App\Domain\Api\Dto\Request\Auth\LoginDto;
use App\Domain\Api\Dto\Request\Auth\RegisterDto;
use App\Domain\Api\Dto\Request\Auth\SocialRegisterDto;
use App\Domain\Helpers\Constants;
use App\Domain\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        if(!$token) return ["error"=>"Invalid Credential, Try Again","code"=>401];
        $user->last_login = date('Y-m-d H:i:s');
        $user->device_id = $loginDto->device_id;
        $user->firebase_token = $loginDto->firebase_token;
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
    public function Register(RegisterDto $registerDto)
    {
        $user= $this->userRepository->create([User::EMAIL=>$registerDto->email,User::PASSWORD=>bcrypt($registerDto->password),User::PHONE=>$registerDto->phone
        ,User::LAST_NAME=>$registerDto->last_name,User::FIRST_NAME=>$registerDto->first_name,User::GENDER_ID=>$registerDto->gender_id,User::FIREBASE_TOKEN=>$registerDto->firebase_token,User::DEVICE_ID=>$registerDto->device_id]);
        $user->assignRole(Constants::Roles[2]);
        $userotp = $this->userRepository->storeUserOtp($user);
        return ["data"=>"Otp has been sent to your email"];

    }
    public function SocialRegister(SocialRegisterDto $registerDto)
    {
        if(!in_array($registerDto->source,Constants::Source))return ["error"=>"Invalid source"];
        $source = $this->findSourceid($registerDto->source,$registerDto);
        if(isset($source["error"]))  return ["error"=>$source["error"]];
        $record = $this->loginExistingSocialRecord($registerDto->source,$registerDto);
        if(isset($record["data"]))  return ["data"=>$record["data"]];

        $checkiden = $this->checkIdentity($registerDto);
        if(isset($checkiden["error"]))  return ["error"=>$checkiden["error"]];

        $password = Str::random(8);
        $user= $this->userRepository->create([User::EMAIL=>$registerDto->email,User::PASSWORD=>bcrypt($password),User::PHONE=>$registerDto->phone
            ,User::LAST_NAME=>$registerDto->last_name,User::FIRST_NAME=>$registerDto->first_name,User::GENDER_ID=>$registerDto->gender_id,User::PICTURE_URL=>$registerDto->picture_url,User::SOURCE=>$registerDto->source,
            User::FACEBOOK_ID => $registerDto->facebook_id,User::GOOGLE_ID => $registerDto->google_id,User::TWITTER_ID => $registerDto->twitter_id,User::FIREBASE_TOKEN=>$registerDto->firebase_token,User::DEVICE_ID=>$registerDto->device_id]);
        $user->assignRole(Constants::Roles[2]);
        $token = auth('api')->attempt([User::EMAIL=>$registerDto->email,User::PASSWORD=>$password]);
        return ["data"=>$token];

    }
    protected function checkIdentity($payload){
        $user= $this->userRepository->findOne(["email"=>$payload->email]);
        if($user == null && $payload->phone !=null ) $user = $this->userRepository->findOne(["phone"=>$payload->phone]);
        if($user != null) return ["error"=>"User exist,Please Login or reset password"];
    }


    protected function loginExistingSocialRecord($source,$payload){
        if($source == Constants::Source[0]){$key="facebook_id"; $value = $payload->facebook_id; }
        if($source == Constants::Source[1]){$key="google_id"; $value = $payload->google_id; }
        if($source == Constants::Source[2]){$key="twitter_id"; $value = $payload->twitter_id; }
        if($source == Constants::Source[3]){$key="instagram_id"; $value = $payload->instagram_id; }
        $user= $this->userRepository->findOne(["source"=>$source,$key=>$value,"email"=>$payload->email]);
        if($user != null) return ["data"=>JWTAuth::fromUser($user)];
    }
    protected function findSourceid($source,$payload){
        if($source == Constants::Source[0] && !isset($payload->facebook_id)) return ["error"=>"A valid facebook id must be sent"];
        if($source == Constants::Source[1] && !isset($payload->google_id)) return ["error"=>"A valid google id must be sent"];
        if($source == Constants::Source[2] && !isset($payload->twitter_id)) return ["error"=>"A valid twitter id must be sent"];
        if($source == Constants::Source[3] && !isset($payload->instagram_id)) return ["error"=>"A valid instagram id must be sent"];
    }





}
