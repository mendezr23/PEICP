<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Period;



class ReportController extends Controller

{
     
    public function report_results(Request $request){
        
        
        $fi = $request->fecha_ini. ' 00:00:00';
        $ff = $request->fecha_fin. ' 23:59:59';
        $periods = Period::whereBetween('date_regis', [$fi, $ff])
                            ->withSum('indicator_id','amount')
                            ->paginate(15);
        
        
        return view('admin.reports.index',compact('periods')); 
        dd($request);
    }

}
