<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBtestController extends Controller
{
    //
    public function getALLTable1(){
        $resultALL=DB::table("table1s")->get();
        #$resultWHERE=DB::table("table1s")->where("id",1)->get();
        $resultWHERE=DB::table("table1s")->where("name","like","%drama%")->get();
        $resultFIND=DB::table("table1s")->find(1);
        return view('getTable1',compact('resultALL','resultWHERE','resultFIND'));
    }
}
