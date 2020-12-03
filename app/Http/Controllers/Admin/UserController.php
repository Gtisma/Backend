<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Helpers\Constants;
use App\Domain\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function activate($userid,$activate,$random){
        try {
            $user = User::findorfail($userid);
            if($user->activation_token !== $random){
                return redirect('/login')->with('message', 'Activation Link failed,Incorrect Link');
            }
            if ($user->is_active == Constants::Active['Inactive']) {
                $user->is_active = Constants::Active['Active'];
                $user->last_login = date('Y-m-d H:i:s');
                $user->email_verified_at = date('Y-m-d H:i:s');
                $user->save();
//                Auth::loginUsingId($user->id);
                return redirect('/login')->with('message', 'Account has been Activated, Please Login');
            }
        }catch (\Exception $exception) {
            return redirect('/login')->with('message', 'Account Verification failed');
            \Log::error("Activation Error",[$exception->getMessage()]);
        }
    }
    public function resendActivation(){
        return view('auth.resendactivation');
    }
    public function sendTestmail(){
        $this->sendEmailQueue('Welcome','ezeibesandra@gmail.com',config('mail.from.address'),'admin.email.welcome',null,"www.google.com");
    }



}
