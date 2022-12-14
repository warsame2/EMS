<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

use Session;

class PagesController extends Controller
{
    
public function users(){



$users=DB::table('users')->get();



return view('users' , compact('users'));


}
  






public function insert(Request $request){


    $request->validate([

        'username' => 'required|string',
        'phone' => 'required|unique:users|max:9',
        'password' => 'required|min:6|max:12',
        'configpassword' => 'required|same:password',
        'status' => 'required|not_in:0',
        'photo' => 'required',
        'dor' => 'required'
     
    ]);



    
    $con=DB::table('users');


$insert=$con->insert([

'username'=>$request->username,
'phone'=>$request->phone,
'password'=>Hash::make($request->password), 
'status'=>$request->status,
'photo'=>$request->photo,
'dor'=>date('Y-m-d H:i:s', strtotime($request->dor))
      

]);

if($insert){

    return back() -> with('success', 'You have add  seccessfuly');
    
    }
    else {
        return back() -> with('fail' , 'try agin pls somthing rong');
    }

//$users=DB::table('users')->get();
//return response("add succsed");
//return view('users', compact('users'));

}






public function dashbord(){
    $data=array();
    if (Session::has('loginid')) {

        $data=User::where('userid' , '=' , Session::get('loginid')) -> first();


        # code...
    }

return view('welcome', compact('data'));

}

public function profile(){


    $data=array();
    if (Session::has('loginid')) {

        $data=User::where('userid' , '=' , Session::get('loginid')) -> first();


        # code...
    }

return view('profile',compact('data'));


}

      












}
