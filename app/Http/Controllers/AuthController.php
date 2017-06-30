<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    
    public function getlogin()
    {
        return view('auth.login');
    }
    public function postlogin()
    {
         $inputs = request()->except([ '_token' ]);
        if(auth()->attempt($inputs)) {
            return redirect()->intended('/');
        }else{
            return 'ใส่รหัสผ่านไม่ถูกต้อง';
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }


    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $fullname = request('fullname');
        $email = request('email');
        $password = bcrypt(request('password'));
        $checkpassword = request('password');
        $checkretypepassword = request('retypepassword');
        $retypepassword = bcrypt(request('retypepassword'));

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
