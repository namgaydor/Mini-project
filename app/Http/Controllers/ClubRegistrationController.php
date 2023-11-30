<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\club_std_details;


use Illuminate\Http\Request;

class ClubRegistrationController extends Controller
{   
    
    public function club_register(Request $request){

        $club_info = new club_std_details();

        $club_info->name = $request->name;

        $club_info->email = $request->email;

        $club_info->std_no = $request->std_no;

        $club_info->phone = $request->phone;

        $club_info->department = $request->department;
        
        $club_info->club_id = $request->club_name; 
       

        $res = $club_info->save();

        if($res){
            return back()->with('success','Registered to club successfuly');
        }
        else{
            return back()->with('fail','Something Wwnt wrong!');
        }
    }

}
