<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Helpers\Constants;
use App\Domain\Models\Security;
use App\Domain\Models\State;
use App\Http\Controllers\Controller;
use App\Domain\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    public function showRegistrationForm()
    {
        $securities = Security::all();
        $states = State::all();
        return view('auth.register',compact('securities','states'));
    }
    protected function registered(Request $request, $user)
    {
        auth()->logout();
        $request->session()->flash('message', 'Check your mail to activate account!');
        return redirect('/login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return App\Domain\Models\User
     */
    protected function create(array $data)
    {
       $result = $this->uploadToCloud($data['picture_url'],'profilepicture');
       $rand = substr(md5(microtime()),rand(0,26),8);
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'state_id' => $data['state_id'],
            'rank_id' => $data['rank_id'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole( Constants::Roles[1] );
        $link = url('/') . '/activate/' . $user->id . '/gtisma/' . $user->is_active . '/' . $rand;
        Log::info($user->link);
        if(isset($result["data"])) $user->picture_url = $result["data"];
        $user->activation_token = $rand;
        $user->save();
        // send email for verification
        $this->sendEmailQueue('Welcome', $user->email, config('mail.from.address'), 'admin.email.welcome', $user, $link);
        return $user;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => 'required|string|min:10|max:13|unique:users',
            'picture_url' => ['required', 'string'],
            'state_id' => ['required'],
            'rank_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'min:8',
                'required',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ],[ 'password.regex' => 'Password must have Uppercase, Lowercase, Number and Special Character']);
    }
}
