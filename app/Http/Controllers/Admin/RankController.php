<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Models\Rank;
use App\Domain\Models\Security;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RankController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function viewRanks($id){
        $ranks = Rank::where('security_id',$id)->get();
        return view('admin.ranks.view',compact('ranks'));
    }
    public function addRank(Request $request){
        $rank = new Rank();
        $rank->name = $request->rank_name;
        $rank->security_id = $request->security_id;
        $rank->save();
        return redirect('/admin/rank/add')->withMessage("Rank Successfully Added");
    }
    public function viewaddRank(){
        $securities = Security::all();
        return view('admin.ranks.add',compact('securities'));
    }


}
