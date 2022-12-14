<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use Illuminate\Foundation\Auth\User;
use Hash;
use Session;

class AuthController extends Controller
{
   
    
public function login(){

return view('login');
    
}


public function loginUser(Request $request)
{
    $request -> validate([
        
        'username'=>'Required',
        'password'=>'Required'
        
        ]);



        $user=User::where('username' , '=' , $request ->username) -> first();
        if($user){
        if(hash::check($request ->password , $user->password)){
        $request -> session()-> put('loginid' , $user-> userid);
        return redirect('welcom');
        }
         
        else {
            
            return back() -> with('fail' , 'the valid  username and password');
        }
        
        }
        else {
            
            return back() -> with('fail' , 'the valid username and password');
        }
}




public function logout(){

    if(Session::has('loginid')){

Session::pull('loginid');
    return   redirect('/');

    }



}






    }


















