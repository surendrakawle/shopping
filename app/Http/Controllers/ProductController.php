<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->Product = new Products;
        $this->path ="admin/products/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->path.'index');
    }
	
	// product description
	public function description(Request $request,$id)
    {
		$product=$this->Product->findData($id);
		if(isset($product)){
        return view($this->path.'description')->with(compact('product'));
		}else{
			return redirect('/');
		}
    }

    public function getProduct(Request $request)
    {
        $data = $this->Product->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditProductData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteProductModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->addColumn('catalogue',function($data){
                $categories=Category::where("id",$data->categories_name)->get()->first();
                if($categories)
                return $categories->categories_name;
                else
                return "";
            })
            ->addColumn('image',function($data){
                $image=json_decode($data->images);
                return "<img src='".$image[0]."' alt='image' width='70px' height='70px'>";
            })
            ->rawColumns(['image','catalogue','Actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $img=array();
        $product =new  Products;
        if($request->hasFile('images'))
        {
            $img=array();
            foreach($request->file('images') as $file)
            {
                $img_temp  =$file; //$request['image'];
                $extension = $img_temp->getClientOriginalExtension();
                $filename  = rand(111,99999).'.'.$extension;
                $image_path = "uploads/product/".$filename;

                //image resize
                move_uploaded_file($img_temp, $image_path);
                $img[]=$image_path;
                // Image::make($img_temp)->resize(400,400)->save($image_path);

            }
         $product->images=json_encode($img);
        }
        if(isset($request->name))
        $product->name=$request->name;
        if(isset($request->code))
        $product->code=$request->code;
        if(isset($request->description))
        $product->description=$request->description;
        if(isset($request->color))
        $product->color=$request->color;
        if(isset($request->price))
        $product->price=$request->price;
        if(isset($request->status))
        $product->status=$request->status;
        if(isset($request->unit))
        $product->unit=$request->unit;
        if(isset($request->size))
        $product->size=$request->size;
        if(isset($request->categories_name))
        $product->categories_name=$request->categories_name;
        if(isset($request->stock))
        $product->stock=$request->stock;
        if(isset($request->brand_name))
        $product->brand_name=$request->brand_name;
        if(isset($request->quantity))
        $product->quantity=$request->quantity;
        if(isset($request->discount))
        $product->discount=$request->discount;
        if(isset($request->purchase_price))
        $product->purchase_price=$request->purchase_price;
        if(isset($request->home_page))
        $product->home_page=$request->home_page;
        $product->save();
        // $request->images=json_encode($img);
        // $this->Product->storeData($request->all());
       // return redirect()->back();
         return response()->json(['success'=>'Product added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data = $this->Product->findData($id);
        
			return response()->json(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Product->deleteData($id);
        return response()->json(['success'=>'Product deleted successfully']);

    }
}
