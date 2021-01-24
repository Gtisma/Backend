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


}
