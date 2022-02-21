<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PagesController extends Controller
{
    

    public function registration()
    {
        return view('login.registration');
    }
    public function registrationSubmit(Request $req)
    {
        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'username'=>'required|min:5|max:20',
                'email'=>'required|email',
                'password'=>'required|min:3 ',
                'conf_password'=>'required|same:password'

            ],
            [
                'username.required'=>'Please provide username',
                'conf_password.same'=>'Password and Confirm password must match'
            ]
        );

        $st=new Student();
        $st->name=$req->name;
        $st->username=$req->username;
        $st->email=$req->email;
        $st->password=$req->password;
        $st->save();


        return "<h1>the form is submitted by $req->name</h1>";
    }

    public function login()
    {
        return view('login.login');
    }

    public function loginSubmit(Request $req)
    {
        $this->validate($req,
            [
                
                'username'=>'required',
                'password'=>'required'
                

            ],
            [
                'username.required'=>'Please provide username',
                'password.required'=>'Please provide password'
                
            ]
        );

        $student=Student::where('username','=',$req->username)->where('password','=',$req->password)->first();
        //return $student;
        if($student == null)
        {
            return "<h1>false</h1>";
        }
        else
        {
            return  "<h1>the form is submitted by $student->name</h1>";
        }
        
        

        
    }

    
}
