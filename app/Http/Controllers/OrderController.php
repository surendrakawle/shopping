<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->Order = new Order;
        $this->path ="admin/order/";
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

    public function getOrder(Request $request)
    {
        $data = $this->Order->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditOrderData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteOrderModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
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
        $Order =new  Orders;
        if($request->hasFile('images'))
        {
            $img=array();
            foreach($request->file('images') as $file)
            {
                $img_temp  =$file; //$request['image'];
                $extension = $img_temp->getClientOriginalExtension();
                $filename  = rand(111,99999).'.'.$extension;
                $image_path = "uploads/Order/".$filename;

                //image resize
                move_uploaded_file($img_temp, $image_path);
                $img[]=$image_path;
                // Image::make($img_temp)->resize(400,400)->save($image_path);

            }
         $Order->images=json_encode($img);
        }
        if(isset($request->name))
        $Order->name=$request->name;
        if(isset($request->code))
        $Order->code=$request->code;
        if(isset($request->description))
        $Order->description=$request->description;
        if(isset($request->color))
        $Order->color=$request->color;
        if(isset($request->price))
        $Order->price=$request->price;
        if(isset($request->status))
        $Order->status=$request->status;
        if(isset($request->unit))
        $Order->unit=$request->unit;
        if(isset($request->size))
        $Order->size=$request->size;
        if(isset($request->categories_name))
        $Order->categories_name=$request->categories_name;
        if(isset($request->stock))
        $Order->stock=$request->stock;
        if(isset($request->brand_name))
        $Order->brand_name=$request->brand_name;
        if(isset($request->quantity))
        $Order->quantity=$request->quantity;
        if(isset($request->discount))
        $Order->discount=$request->discount;
        if(isset($request->purchase_price))
        $Order->purchase_price=$request->purchase_price;
        if(isset($request->home_page))
        $Order->home_page=$request->home_page;
        $Order->save();
        // $request->images=json_encode($img);
        // $this->Order->storeData($request->all());
       // return redirect()->back();
         return response()->json(['success'=>'Order added successfully']);
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
		$data = $this->Order->findData($id);
        
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
        $this->Order->deleteData($id);
        return response()->json(['success'=>'Order deleted successfully']);

    }
}
