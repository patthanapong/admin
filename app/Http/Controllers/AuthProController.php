<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthProController extends Controller
{
     public function getlogin()
    {
        return view('auth.login');
    }

     public function postlogin()
    {
         $inputs = request()->except([ '_token' ]);
        if(auth()->attempt($inputs)) {
            
            // Activity_Log::create([
            //     'user_id' => auth()->user()->id,
            //     'message' => 'Login'
            //     'message' => 'Login'
            // session()->flash('Titlemessage', 'Success');
            // session()->flash('message', 'Login Success');
            return redirect()->intended('/');
        }else{
            // session()->flash('message', 'Login Fail');
            return view('probet.auth.login');
        }      
        //return "postlogin";
    }      

    public function logout(){


            // Activity_Log::create([
            //     'user_id' => auth()->user()->id,
            //     'message' => 'Logout'    
            // ]);


        auth()->logout();
        return redirect('/');
    }

    public function register()
    {
        return view('probet.auth.master');
    }

    public function store(Request $request)
    {
          $rules =[
             'fullname' => 'required|min:5',
             'email' => 'required|min:5',
            'password' => 'required|min:6',
            'retypepassword' => 'required|min:6',
           
         ];

        $fullname = request('fullname');
        $email = request('email');
        $password = bcrypt(request('password'));
        $checkpassword = request('password');
        $checkretypepassword = request('retypepassword');
        $retypepassword = bcrypt(request('retypepassword'));

        $this->validate($request,$rules);

        if($checkpassword==$checkretypepassword){
        DB::table('users')->insert([
        'fullname' => $fullname,
        'email' => $email,
        'password' => $password,
        ]);
        return redirect('/');

        }else{return "password error";}

        
       

        
    }
}
