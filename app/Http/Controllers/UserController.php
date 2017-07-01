<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{

      private $rules =[
             'fullname' => 'required|min:5',
             'email' => 'required',
            'password' => 'required|min:6'
            
         ];


    public function index()
    {
        $user = DB::table('users')
        ->get();
        return view('user.index', compact('user'));
    }   

    public function create()
    {
        return view('user.create');
        
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


        return redirect('/index');

        }else{return "password error";}
    }

    public function edit($id)
    {
        $user = DB::table('users') 
        ->where('id', $id)
        ->first();
        

        return view('user.edit',compact('user'));
    }

     public function update(Request $request, $id)
    {
        $datas = request()->except(['_token',]);
        $this->validate($request, $this->rules);

        DB::table('users')
            ->where('id', $id)
            ->update($datas);
            session()->flash('message', 'Edit Success');
            return redirect('/index');
    }

    public function destroy($id)
      {
        try{
            DB::table('users')
            ->where('id',$id) 
            ->delete();

            session()->flash('message', 'Delete Success');

            return redirect('/index');
        }catch (Exception $u){
            abort(500);
        }
      }

}
