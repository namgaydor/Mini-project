<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\club;

use Hash;

use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }
    
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'std_no'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12'
        ]);

        $user = new User();

        $user->name = $request->name;

        $user->std_no = $request->std_no;

        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->department = $request->department;

        $user->password = Hash::make($request->password);

        $res = $user->save();

        if($res){
            return back()->with('success','You have registered successfuly');
        }
        else{
            return back()->with('fail','Something Wwnt wrong!');
        }

    }
   public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);

                if ($user->role === 'admin') {
                    return redirect('manage_club');
                } elseif ($user->role === 'user') {
                    return redirect('dashboard'); 
                } elseif ($user->role === 'subadmin') {
                    return redirect('subadmin_dashboard'); 
                } else {
                    return redirect('dashboard'); 
                }
            } else {
                return back()->with('fail', 'Password does not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function dashboard()
    {   


        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }

        $clubs = club::all();

        $clubData = club::all();

        return view('user_student.dashboard',compact('data','clubData','clubs'));
    }
    public function admin_dashboard()
    {   
        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('admin.admin_dashboard',compact('data'));
    }
    public function subadmin_dashboard()
    {   
        $data = array();

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('subadmin.subadmin_dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
