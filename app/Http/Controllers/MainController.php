<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;

class MainController extends Controller
{
    public function welcome()
    {
        $picture = Picture::inRandomOrder()->take(3)->get();
        return View('welcome')->with('picture', $picture);

    }



}
