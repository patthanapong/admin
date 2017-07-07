<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Activity_Log;

class ActivityLogController extends Controller
{
    public function index()
    {
        // $activitylog = DB::table('activity__logs')
        // ->get();
        $activitylog = Activity_Log::where('user_id', auth()->user()->id)->orderBy('id','asc')->paginate(10);

        return view('ActivityLog.index', compact('activitylog'));
       
    }


}
