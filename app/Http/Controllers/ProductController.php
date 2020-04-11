<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Validator,Redirect,Response,File;
class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        if($request->isMethod('post'))
        {
           $data=$request->all();
           $product = new Products;
           /// `name`, `code`, `desc`, `price`,
           $product->name=$data['product_name'];
           $product->code=$data['product_code']; 
           $product->color=$data['product_color']; 
           $product->desc=$data['product_desc']; 
           $product->price=$data['product_price']; 
           $product->images=''; 
        //    request()->validate([
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);
           if($request->hasfile('images'))
           {
               
               $images=$request->file('images');
               foreach($images as $key=>$value){
               //$filename .= time() . '/.' . $images[$key]->getClientOriginalExtension();
               $filename[] = time().$images[$key]->getClientOriginalName();
               $path = 'frontEnd/uploads/' . time().$images[$key]->getClientOriginalName();
                //Image::make($data['profile_img']->getRealPath())->resize(100,100)->save(public_path($path));   
                }
                echo "<pre>";
                $filename= json_encode($filename);
               print_r($filename);
           }
           //$product->save();
           dd($data);
           exit;
        }   
        return view('admin.products.product');
    }
}
