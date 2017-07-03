<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DepositController extends Controller
{
    public function index()
    {
        $deposit = DB::table('deposit')
        ->get();
        return view('deposit.index', compact('deposit'));
    }

    public function create()
    {
        return view('deposit.create');
    }

     public function store(Request $request)
    {
         $rules =[
             'username' => 'required|min:5',
             'balance' => 'required|max:8',
            'bankdeposit' => 'required',
            'accountnumberdeposit' => 'required',
            'accontnamedeposit' => 'required',
            'datetime' => 'required',
            'channeldeposit' => 'required',
            'tel' => 'required|max:10',
             'opinion' => 'required'
         ];

           $datas = request()->except([ '_token' ]);
          $this->validate($request,$rules);

         try{
        
            DB::table('deposit')
            ->insert($datas);

             return redirect('/dolladeposit');
             } catch (Exception $d) {
                 abor(500);
             }
        

    }
}
