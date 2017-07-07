<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Deposit;
use App\Activity_Log;
class DepositController extends Controller
{
    public function index()
    {
        // $deposit = DB::table('deposits')
        // ->get();
        $deposit = Deposit::paginate(10);
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
            
         ];

           $datas = request()->except([ '_token' ]);
        //   $this->validate($request,$rules);

         try{
             if ($request->opinion) {
                Deposit::create([
                    'username' => auth()->user()->fullname, 
                    'balance' => $request->balance,
                    'bankdeposit' => $request->bankdeposit, 
                    'accountnumberdeposit'=> $request->accountnumberdeposit, 
                    'accontnamedeposit'=> $request->accontnamedeposit, 
                    'datetime'=> $request->datetime, 
                    'channeldeposit'=> $request->channeldeposit,
                    'tel'=> $request->tel, 
                    'opinion' => $request->opinion
                ]);

                Activity_Log::create([
                    'user_id' => auth()->user()->id,
                    'message' => 'แจ้งการฝากเงิน'                   
                ]);

            } else {
                Deposit::create([
                    'username' => auth()->user()->fullname, 
                    'balance' => $request->balance,
                    'bankdeposit' => $request->bankdeposit, 
                    'accountnumberdeposit'=> $request->accountnumberdeposit, 
                    'accontnamedeposit'=> $request->accontnamedeposit, 
                    'datetime'=> $request->datetime, 
                    'channeldeposit'=> $request->channeldeposit,
                    'tel'=> $request->tel, 
                    'opinion' => ''
            ]);

                Activity_Log::create([
                    'user_id' => auth()->user()->id,
                    'message' => 'แจ้งการฝากเงิน'                   
                ]);
            }
            // DB::table('deposit')
            // ->insert($datas);
            session()->flash('Titlemessage', 'Success');
            session()->flash('message', 'Add Deposit Success');
             return redirect('/dolladeposit');
             } catch (Exception $d) {
                 abor(500);
             }
        

    }
}
