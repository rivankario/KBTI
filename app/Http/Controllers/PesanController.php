<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function pemesanan(Request $request){
        //dd($request);
        $data = $request;
        //$in_date = $request->
        //dd($data);
        return view('pemesanan',compact('data'));
    }
    public function checkout(){
        return view('checkout');
    }
}
