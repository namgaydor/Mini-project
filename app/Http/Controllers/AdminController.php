<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\club;

use App\Models\t_club;

use Session;

use Hash;


class AdminController extends Controller
{
   public function manage_club(){
    $data = array();

    if(Session::has('loginId')){
        $data = User::where('id','=',Session::get('loginId'))->first();
    }

    $clubData = club::all();

    $clubAD = t_club::all();

    $userData =  User::where('role', 'subadmin')->get(); 

    return view('admin.manage_club',compact('data', 'clubData','userData','clubAD'));
   }
    public function add_club(){

        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('admin.add_club',compact('data'));

    }
    public function upload_club(Request $request){

        $club = new t_club();

        $club->club_name = $request->club_name;


        $res = $club->save();

        if($res){
            return back()->with('success','Club added successfully');
        }
        else{
            return back()->with('fail','Something Wwnt wrong!');
        }
    }
    public function deleteClub($id){
        // Assuming you have a Club model with a 'id' column
        Club::where('id', $id)->delete();

        return back();
    }
    public function add_club_advisors(){

        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }

        return view('admin.add_club_advisors',compact('data'));
    }

    public function add_advisors(Request $request){

        
        $advisors = new User();

        $advisors->name = $request->name;

        $advisors->email = $request->email;

        $advisors->std_no = $request->std_no;

        $advisors->phone = $request->phone;

        $advisors->department = $request->department;

        $advisors->role = 'subadmin';

        $advisors->password = Hash::make($request->password);

        $res = $advisors->save();

        if($res){
            return back()->with('success','Advisor added successfuly');
        }
        else{
            return back()->with('fail','Something Wwnt wrong!');
        }

    }
    public function assign_club(Request $request){

        $club = new club();

        $club->c_name = $request->c_name;

        $club->ad_name = $request->ad_name;


        $res = $club->save();

        if($res){
            return back()->with('success','Advisor assigned successfuly');
        }
        else{
            return back()->with('fail','Something Wwnt wrong!');
        }

    }
}
