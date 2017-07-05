<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WithDrawController extends Controller
{
    public function index()
    {
        $withdraw = DB::table('withdraw')
        ->get();
        return view('withdraw.index', compact('withdraw'));
    }

    public function create()
    {
        return view('withdraw.create');
    }

    public function store(Request $request)
    {
         $rules =[
             'username' => 'required|min:5',
             'balance' => 'required|max:8',
            'bankwithdraw' => 'required',
            'accountnumberwithdraw' => 'required',
            'accountnamewithdraw' => 'required',
            'datetime' => 'required',
            'channelwithdraw' => 'required',
            'tel' => 'required|max:10',
             'opinion' => 'required'
         ];

           $datas = request()->except([ '_token' ]);
          $this->validate($request,$rules);

         try{
        
            DB::table('withdraw')
            ->insert($datas);
            session()->flash('Titlemessage', 'Success');
            session()->flash('message', 'Add WithDraw Success');
             return redirect('/dollawithdraw');
             } catch (Exception $d) {
                 abor(500);
             }
    }
}
