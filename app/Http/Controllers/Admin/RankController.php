<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 9/12/20
 * Time: 6:40 PM
 */


namespace App\Http\Controllers\Admin;

use App\Domain\Models\Rank;
use App\Http\Controllers\Controller;




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


}
