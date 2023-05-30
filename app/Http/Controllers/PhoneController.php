<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PhoneController extends Controller

{
    public function PhoneType(){
        $phone=DB::table('products')->get();
        return view('phones',['phone'=>$phone]);
    }



    public function checkout($id){
        $phone=DB::table('products')->where('id','=',$id)->first();
        // dd($phone);
        return view('checkout',['phone'=>$phone]);

    }


    public function invoic(Request $request){
       
        $row=[
            'name'=>$request->name,
            'total'=>$request->total,
            'city'=>$request->city,
            'neighborhood'=>$request->neighborhood,
            'street'=>$request->street,
            'pay'=>$request->pay

        ];

        DB::table('invoic')->insert($row);

    }



}
