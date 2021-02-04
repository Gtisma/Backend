<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Models\CrimeType;
use App\Domain\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
    public function addCrimeType(Request $request){
        $crimetype = new CrimeType();
        $crimetype->name = $request->crime_type_name;
        $crimetype->save();
        return redirect('/admin/crimetype/add')->withMessage("Crime Type Successfully Added");
    }
    public function viewaddCrimeType(){
        return view('admin.crimetypes.add');
    }
    public function DeleteCrimeType($id){
        $rep = Report::where('crime_type_id',$id)->first();
        if($rep != null){
            return redirect()->back()->withMessage("CrimeType cannot be deleted,Some report record has this crimeType");
        }
        CrimeType::find($id)->delete();
        return redirect()->back()->withMessage("CrimeType Successfully deleted");
    }


}
