<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Helpers\Constants;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticated(Request $request, $user)
    {
        if($user->is_active == Constants::Active["Inactive"]){
            auth()->logout();
            return redirect('/login')->with('message','You account has not be activated, Check mail or click resend ');
        }
        if ( $user->hasRole(Constants::Roles[2]) ) {// do your magic here
            auth()->logout();
            return redirect('/login')->with('message','You cannot Login on this platform, Kindly use the mobile app ');
        }
        date_default_timezone_set('Africa/Lagos');
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();
        return redirect('/admin');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    use AuthenticatesUsers;

}
