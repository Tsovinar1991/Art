<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;

class MainController extends Controller
{

    public function __construct(Request $request,$local=null) {

    }

    public function welcome(Request $request,$local=null)
    {
        app()->setLocale($local);
//        echo trans('lang.msg');
//        die();
        $picture = Picture::inRandomOrder()->take(3)->get();
        return View('welcome')->with('picture', $picture);

    }



}
