<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Withdraw;
use App\Activity_Log;

class WithDrawController extends Controller
{
    public function index()
    {
        // $withdraw = DB::table('withdraws')
        // ->get();
        $withdraw = Withdraw::paginate(10);
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
            'tel' => 'required|max:10'
             

         ];

           $datas = request()->except([ '_token' ]);
          //$this->validate($request,$rules);

         try{

            if ($request->opinion) {
                Withdraw::create([
            'username' => auth()->user()->fullname, 
            'balance' => $request->balance,
            'bankwithdraw' => $request->bankwithdraw, 
            'accountnumberwithdraw'=> $request->accountnumberwithdraw, 
            'accountnamewithdraw'=> $request->accountnamewithdraw, 
            'datetime'=> $request->datetime, 
            'channelwithdraw'=> $request->channelwithdraw,
            'tel'=> $request->tel, 
            'opinion' => $request->opinion
            ]);

                Activity_Log::create([
                        'user_id' => auth()->user()->id,
                        'message' => 'แจ้งการถอนเงิน'                   
                ]);

            } else {
                Withdraw::create([
            'username' => auth()->user()->fullname, 
            'balance' => $request->balance,
            'bankwithdraw' => $request->bankwithdraw, 
            'accountnumberwithdraw'=> $request->accountnumberwithdraw, 
            'accountnamewithdraw'=> $request->accountnamewithdraw, 
            'datetime'=> $request->datetime, 
            'channelwithdraw'=> $request->channelwithdraw,
            'tel'=> $request->tel, 
            'opinion' => ''
            ]);

                Activity_Log::create([
                        'user_id' => auth()->user()->id,
                        'message' => 'แจ้งการถอนเงิน'                   
                ]);
            }

            
            // DB::table('withdraw')
            // ->insert($datas);
            session()->flash('Titlemessage', 'Success');
            session()->flash('message', 'Add WithDraw Success');

              return redirect('/dollawithdraw');
             } catch (Exception $d) {
                 abor(500);
             }
    }
}
