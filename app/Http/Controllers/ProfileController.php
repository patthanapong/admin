<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function pro()
    {
        return view('profile');
    }

    public function update()
    {
        


       $this->validate( request(), [
            'fullname' => 'required|string|max:255|min:3',
            'password' => 'required|password',
            'password' => 'required|string|min:6|confirmed',
			]);

		$user = auth()->user();
		$user->fullname = request('fullname');
		$user->password = bcrypt( request('password'));
		$user->save();

         Activity_Log::create([
                'user_id' => auth()->user()->id,
                'message' => 'สมัครสมาชิก'    
            ]);


		return back()->with('status','Update complete!');
	}

    }

    

