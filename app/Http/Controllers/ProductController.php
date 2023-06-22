<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct(){
        //$result=DB::table("products")->get();   //selet * from products と同じ  
        $result=DB::table("products")->simplepaginate(3);
        return view('dispProductList',compact('result'));
    }

    public function getProductDetail(Request $request)
    {
        $resultDetail=DB::table("products")->where("id",$request->input('detailID'))->get();
        return view('dispProductDetail',compact('resultDetail'));
    }

    public function addCart(Request $request){
        $resultDetail=DB::table("products")->find($request->input('detailID'));
        
        $SessionProductID=$resultDetail->id;
        $SessionProductNAME=$resultDetail->name;
        $SessionProductPRICE=$resultDetail->price;
        $SessionProductIMGFILE1=$resultDetail->imgfile1;

        $SessionData=compact('SessionProductID','SessionProductNAME','SessionProductPRICE','SessionProductIMGFILE1');

        session()->push('cart_data',$SessionData);

        return view('dispCart');



        }

    

    public function delCartAll(Request $request){
        session()->forget('cart_data');
        
        return view('dispCart');
    }



    public function viewCart(Request $request){
        return view('dispCart');
    }

    public function search(Request $request){
        $result=DB::table("products")->where("name","like","%".$request->input('search')."%")->simplepaginate(3);
        return view('dispProductList',compact('result', 'result'));
        $search = $request->input('search');
        $query = Product::query();
        $result=Product::paginate(3);

        if($search){
            $spaceConv=mb_convert_kana($search,'s');
            $wordArray = preg_split('/[\s,]+/', $spaceConv, -1, PREG_SPLIT_NO_EMPTY);           
            $query->where('name','like','%'.$wordArray.'%');
            $query->orWhere('name','like','%'.$wordArray[0].'%');
            $result=$query->paginate(3);
        }
    }


    public function delCartDetail(Request $request){
        $idx=$request->input('detailID');
        $request->session()->forget('cart_data.'.$idx);
        return view('dispCart');
        //session()->forget('cart_data.0')で
        //cart_data配列の0番目の要素だけを削除することができる
    }

}
