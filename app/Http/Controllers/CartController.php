<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->Cart = new Cart;
        $this->title = 'Cart';
        $this->path = 'admin/cart/';
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

    public function getCart(Request $request)
    {
        $data = $this->Cart->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditProductData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteProductModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
           
            ->rawColumns(['Actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "working";
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
            'product_id' => 'required',
            'qty' => 'required',
        ]);
		
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
			$product=Products::select('name','price','images','description')->find($request->product_id);
		if(isset(auth()->user()->id)){
			$cart=$this->Cart->where(['product_id'=>$request->product_id,'created_by'=>auth()->user()->id])->get()->first();
			
		if(isset($cart->id)){
			// if product available in card 
			$request->request->add(['price' => ($cart->price+$product->price),'qty' => ($cart->qty+$request->qty),'updated_by'=>auth()->user()->id]);
		    $Cart=$this->Cart->updateData($cart->id,$request->only('product_id','qty','price','updated_by'));
			}else{
			// if product not in cart 
			$request->request->add(['price' => $product->price,'created_by'=>auth()->user()->id,'discount'=>$product->discount]);
		    $Cart=$this->Cart->storeData($request->only('product_id','qty','price','created_by','discount'));	
			}
			}else{
			
			$cart = session()->get('cart');
			$id=$request->product_id;
			
			// if cart is empty then this the first product
			if(!$cart) {
			
				$cart = [
						$id => [
							"id" => $id,
							"name" => $product->name,
							"quantity" => 1,
							"price" => $product->price,
							"photo" => $product->images,
							"description" => $product->description,
						]
				];
			
				session()->put('cart', $cart);
			
				return redirect('order');
			}
 
			// if cart not empty then check if this product exist then increment quantity
			if(isset($cart[$id])) {
		
				$cart[$id]['quantity']++;
		
				session()->put('cart', $cart);
		
				return redirect('order');
		
			}
		
			// if item not exist in cart then add to cart with quantity = 1
			$cart[$id] = [
				"id" => $id,
				"name" => $product->name,
				"quantity" => 1,
				"price" => $product->price,
				"photo" => $product->images,
				"description" => $product->description,
			];
 
        session()->put('cart', $cart);
 
       
		}
		return redirect('order');
        /*if ($files = $request->file('image')) {
            
            $fileName =  "uphaaar_gifts-".time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('Cart', $fileName);

        }
        $Cart=$this->Cart->storeData($request->all());
        $Cart->image=$fileName;
        $Cart->save();
        return response()->json(['success'=>'Cart added successfully']);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $Cart)
    {
        return "working";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->Cart->findData($id);
        $catalogue = Catelog::get();
        $html = '<div class="form-group error"></div>
                <label for="product_id">Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editproduct_id" name="product_id" value="'.$data->product_id.'" class="form-control" placeholder="Enter your Cart name">
                    </div>
                </div>
                <label for="qty">Catalogue</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control" id="editqty" name="qty">
                            <option value="">-- Please select --</option>';
                           foreach($catalogue as $key)
                           {
                            $status="";
                            if($data->qty==$key->id){
                                $status="selected";
                               }
                            $html .= '<option value="'.$key->id.'" '.$status.'>'.$key->catelogue_name.'</option> ';
                           }
        $html .= '         </select>
                    </div>
                </div>
                <label for="image">Images</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="file" name="image_1" id="image_1" placeholder="Choose image" >          
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                    <img src="'.asset('storage/Cart/'.$data->image).'" name="old_img" width="50px" height="50px">          
                                    </div>
                                </div>
                <label for="description">Description</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editDescription" name="Description" value="'.$data->description.'" class="form-control" placeholder="Enter your description">
                    </div>
                </div>
                <br>
               ';
        return response()->json(['html'=>$html]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
		if($id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
       $validator = \Validator::make($request->all(), [
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
       
        if ($files = $request->file('image_1')) {
            $fileName =  "uphaaar_gifts-".time().'.'.$request->image_1->getClientOriginalExtension();
            $request->image_1->storeAs('Cart', $fileName);
            $Cart=Cart::find($request->id);
            $Cart->image=$fileName;
            $Cart->save();  
        }
        $Cart=$this->Cart->updateData($request->id, $request->only('product_id','qty','Description'));
        

        return response()->json(['success'=>'Cart updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		if($id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$id])) {
 
                unset($cart[$id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
        //$this->Cart->deleteData($id);
        //return response()->json(['success'=>'Cart deleted successfully']);
    }
	public function afterLogin()
	{
		if(isset($cart->id)){
			// if product available in card 
			$request->request->add(['price' => $product->price,'created_by'=>auth()->user()->id,'discount'=>$product->discount]);
		    $Cart=$this->Cart->updateData($cart->id,$request->only('product_id','qty','price','created_by','discount'));
			} else{
			// if product not in cart 
			$request->request->add(['price' => $product->price,'created_by'=>auth()->user()->id,'discount'=>$product->discount]);
		    $Cart=$this->Cart->storeData($request->only('product_id','qty','price','created_by','discount'));	
			}
	}
}
