<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Helpers\Constants;
use App\Domain\Models\Gender;
use App\Domain\Models\State;
use App\Domain\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\EmailActivationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    public function resendActivationLink(EmailActivationRequest $emailActivationRequest){
        $user = User::where(User::EMAIL,$emailActivationRequest->convertToDto()->email)->first();
        if($user ==  null) return redirect()->back()->with('error', 'Invalid Email, User not registered');
        $rand = substr(md5(microtime()),rand(0,26),8);
        $user->activation_token = $rand;
        $link = url('/') . '/activate/' . $user->id . '/gtisma/' .Constants::Active['Inactive']. '/' . $rand;
        $user->save();
        $this->sendEmailQueue('Welcome', $user->email, config('mail.from.address'), 'admin.email.welcome', $user, $link);
        return redirect()->back()->with('message', 'Activation Email Sent');

    }
    public function sendTestmail(){
        $this->sendEmailQueue('Welcome','ezeibesandra@gmail.com',config('mail.from.address'),'admin.email.welcome',null,"www.google.com");
    }
    private function checkType($type){
        switch ($type){
            case 'eyewitness':
                $role= Constants::Roles[2];
                break;
            case 'admin':
                $role=Constants::Roles[1];
                break;
            default:
                $role= Constants::Roles[0];
        }
        return $role;
    }

    public function viewUsers($type=null){
        if(isset($type)){
            $role = $this->checkType($type);
            $users = User::whereHas("roles", function($q) use($role){ $q->where("name", $role); })->orderby('created_at', 'desc')->paginate(20);
        }
        else {
            $type = "Users";
            $users = User::orderBy('created_at', 'DESC')->paginate(20);
        }
        return view('admin.users.view',compact('users','type'));
    }
    public function viewProfile($id =null){
        if(isset($id)){
            $userprofile = User::find($id);
        }else {
            $userprofile = auth()->user();
        }
        return view('admin.users.profile',compact('userprofile'));
    }
    public function viewAdminPage(){
        $states = State::all();
        $gender = Gender::all();
        return view('admin.users.addadmin',compact('states','gender'));
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => 'required|string|min:10|max:13|unique:users',
            'state_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'min:8',
                'required',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/']
        ],[ 'password.regex' => 'Password must have Uppercase, Lowercase, Number and Special Character']);
    }

    public function storeAdmin(Request $request){
        $validator = $this->validator($request->all());
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' =>  $request->last_name,
            'phone' =>  $request->phone,
            'email' =>  $request->email,
            'state_id' =>  $request->state_id,
            'gender_id' =>  $request->gender_id,
            'password' => Hash::make( $request->password),
            'is_active' => Constants::Active['Active'],
        ]);
        $user->assignRole( Constants::Roles[0] );
        $user->save();
        return  redirect('/admin/user/addadmin')->with('message','SuperAdmin Successfully Added');
    }

}
