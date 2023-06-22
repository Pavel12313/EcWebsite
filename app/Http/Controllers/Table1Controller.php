<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;

class Table1Controller extends Controller
{
    public function getProduct(){
        $id=2;
        $result=Table1::select()->get();
        return view('dispProduct',compact('result'));
    }
    //
}
