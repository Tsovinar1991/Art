<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
 public function welcome(){
     return View('welcome');

}
}
