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
           $product->name=$data['PRODUCT_NAME'];
           $product->code=$data['PRODUCT_CODE'];
           $product->color=$data['PRODUCT_COLOR'];
           $product->desc=$data['PRODUCT_DESCRIPTION'];
           $product->price=$data['PRODUCT_PRICE'];
           $product->images='';
        //    request()->validate([
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);
           if($request->hasfile('PRODUCT_IMAGES'))
           {

               $images=$request->file('PRODUCT_IMAGES');
               foreach($images as $key=>$value){
               //$filename .= time() . '/.' . $images[$key]->getClientOriginalExtension();
               $filename[] = time().$images[$key]->getClientOriginalName();
               $path =  time().$images[$key]->getClientOriginalName();
               $images[$key]->move('frontEnd/uploads/',$path);
                //Image::make($data['profile_img']->getRealPath())->resize(100,100)->save(public_path($path));
                }
                $product->images=json_encode($filename);
           }
           return $product->save();

        }
        return view('admin.products.product');
    }
}
