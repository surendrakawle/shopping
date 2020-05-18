<?php

namespace App\Http\Controllers;
use App\Products;
use App\Category;
use App\Catelog;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product=Products::all();
        $category=Category::all();
        $category_1=Catelog::all();
        $slider=Catelog::all();
        return view('home')->with([
            'product'=>$product,
            'category_1'=>$category_1,
            'category'=>$category,
            'slider'=>$slider,
            ]);
    }
}
