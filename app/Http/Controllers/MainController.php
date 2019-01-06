<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;

class MainController extends Controller
{

    public function __construct(Request $request,$local=null) {
        //set’s application’s locale
        app()->setLocale($local);

        //Gets the translated message and displays it
//        echo trans('lang.msg');

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
