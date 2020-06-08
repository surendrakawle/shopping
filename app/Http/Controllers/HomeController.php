<?php

namespace App\Http\Controllers;
use App\Products;
use App\Category;
use App\Catelog;
use App\Slider;

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
        $slider=Slider::all();
        return view('home')->with([
            'product'=>$product,
            'category_1'=>$category_1,
            'category'=>$category,
            'slider'=>$slider,
            ]);
    }
}
