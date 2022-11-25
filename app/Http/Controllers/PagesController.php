<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function login(){


        return view('/login');
        
        }






        public function loginUser(request $request){


            $request -> validate([
                
                'email'=>'Required|email|',
                'password'=>'Required'
                
                ]);
        
        $user=User::where('email' , '=' , $request ->email) -> first();
        if($user){
        if(hash::check($request ->password , $user->password)){
        $request -> session()-> put('loginid' , $user-> id);
        return redirect('/welcome');
        }
         
        else {
            
            return back() -> with('fail' , 'the password not match');
        }
        
        }
        else {
            
            return back() -> with('fail' , 'the email not register');
        }
        }













}
