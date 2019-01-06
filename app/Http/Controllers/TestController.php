<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }

    public function ajax(){
        $data ="testing";
        return response()->json($data);
    }
    public function ajaxpost(Request $request){

       return response()->json($request);
    }
}
