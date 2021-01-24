<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Models\Security;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function viewSecurity(){
        $securities = Security::paginate(20);
        return view('admin.security.view',compact('securities'));
    }
    public function addSecurity(Request $request){
        $security = new Security();
        $security->name = $request->security_name;
        $security->save();
        return redirect('/admin/security/add')->withMessage("Security Outfit Successfully Added");
    }
    public function viewaddSecurity(){
        return view('admin.security.add');
    }


}
