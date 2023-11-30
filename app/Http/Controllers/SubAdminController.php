<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\User;

use App\Models\club;

use App\Models\club_std_details;


class SubAdminController extends Controller
{
    public function club_details(Request $request){

        $data = array();

        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
    
        $clubs = Club::all();
    
        // Check if the form is submitted with a selected club
        if ($request->has('selectedClub')) {
            
            $selectedClubId = $request->input('selectedClub');
    
            // Get the club members for the selected club
            $clubMembers = club_std_details::where('club_id', $selectedClubId)->get();
    
            return view('subadmin.club_details', compact('data', 'clubs', 'clubMembers'));
        }
    
        // If no club is selected, render the initial view
        return view('subadmin.club_details', compact('data', 'clubs'));

    }
    public function slot_details(){

        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }

        $clubs = club::all();

        return view('subadmin.slot_details',compact('data','clubs'));

    }

    public function getClub($id)
    {
        $club = club::findOrFail($id);

        return response()->json($club);
    }

    public function update_club_info(Request $request)
    {
        $validatedData = $request->validate([
            'c_name' => 'required',
            'ad_name' => 'required',
            's_name' => 'required',
            'av_slots' => 'required|integer',
            'total_mem' => 'required|integer',
        ]);

        $club = Club::findOrFail($request->c_name);

        $club->ad_name = $request->ad_name;
        $club->s_name = $request->s_name;
        $club->av_slots = $request->av_slots;
        $club->total_mem = $request->total_mem;

        $club->save();

        return redirect()->back()->with('success', 'Club information updated successfully');
    }
   
}
