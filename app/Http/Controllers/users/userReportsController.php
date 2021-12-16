<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Validator;
use Redirect;
use Carbon\Carbon;


class userReportsController extends Controller
{
   
    public function graphical()
    {

        $countMale = DB::collection('users')
        ->where('gender','male')
        ->count();

        $countFemale = DB::collection('users')
        ->where('gender','female')
        ->count();


        // $activeSub = DB::select('select count(*) from users group by gender');
        // dd($activeSub);

        
        $arrayData[0] = $countMale;
        $arrayData[1] = $countFemale;


        $currentMonth = date('m');
        $currentYear = date('Y');

        // dd($currentMonth);



        
        
        $users =DB::connection('mongodb')->collection('users')->whereYear('creationDate','2021')
        ->get();
        dd($users);

        $account = DB::connection('mongodb')->collection('users')->select('MONTH (created_at) as month')->get();
        dd($account);

        $activeSub = DB::collection('users')
        ->select('MONTH (created_at) as month','YEAR (created_at) as year')
        ->get();

        // $activeSub = DB::select('select MONTH (created_at) as month,YEAR (created_at) as year,count(id) as count from users where YEAR (created_at) = '.$currentYear.' GROUP BY month,year ORDER BY year ASC,month ASC');


        dd($activeSub);

        return view('users.reports.index',compact('arrayData'));
    }
    
    public function excelSheet()
    {
        return view('users.reports.excelSheet');

    }

    public function exportUsers(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'orderBy' => 'required',
            'type' => 'required',
        ]);

        if ($validator->passes()) {
            $orderBy = $request->orderBy;
            $type = $request->type;
    
            $name = 'users order by '.$orderBy.' '.$type.' '.date("d-m-Y h:i:s a").'.xlsx';
            return Excel::download(new UsersExport($orderBy,$type), $name);
        }else{
            return Redirect::back();
        }
    }

}
