<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Models\CrimeType;
use App\Http\Controllers\Controller;




class CrimeTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function viewCrimeTypes(){
        $crimetypes = CrimeType::paginate(20);
        return view('admin.crimetypes.view',compact('crimetypes'));
    }


}
