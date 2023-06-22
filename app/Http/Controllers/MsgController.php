<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msg;

class MsgController extends Controller
{
    public function getDB(){
        $results=Msg::select()->get();
        $str="Read data from the database program.";
        return view('msg',compact('results','str'));
    }
    //
}
