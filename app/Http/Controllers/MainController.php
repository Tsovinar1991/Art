<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;

class MainController extends Controller
{
    public function welcome()
    {
        return View('welcome');

    }

    public function category($id)
    {
        $category = Category::all();
        $data = Picture::orderby('id', 'desc')->where('category_id', $id)->paginate('9');
        return view('Pictures.gallery')->with(['data' => $data, 'categories' => $category]);
    }

}
