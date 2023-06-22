<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //商品テーブルから商品を読み込む
    public function getProduct(){
        $result=DB::table("products")->get();   //selet * from products と同じ   
        return view('dispProductList',compact('result'));
    }

    public function getProductDetail(){
        //ここに詳細データを読み込むコードをかいてください。
        $resultDetail=DB::table("products")->where("id",1)->get(); 
        return view('dispProductDetail',compact('resultDetail'));
    }
}
