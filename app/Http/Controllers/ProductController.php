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
            ->rawColumns(['catalogue','Actions'])
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
        foreach($request->file('images') as $file)
        {
            $img_temp  =$file; //$request['image'];
            $extension = $img_temp->getClientOriginalExtension();
            $filename  = rand(111,99999).'.'.$extension;
            $image_path = "frontEnd/uploads/".$filename;

            //image resize
            move_uploaded_file($img_temp, $image_path);
            $img[]=$image_path;
            // Image::make($img_temp)->resize(400,400)->save($image_path);

        }
        $request->images=json_encode($img);
        $this->Product->storeData($request->all());

        // return response()->json(['success'=>'Product added successfully']);
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
        //
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
