<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Catelog;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->Slider = new Slider;
        $this->title = 'Slider';
        $this->path = 'admin/slider/';
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

    public function getSlider(Request $request)
    {
        $data = $this->Slider->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditProductData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteProductModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->addColumn('slider_image',function($data){
                return "<img src=".asset('storage/slider/'.$data->image)." style='height:100px' alt='Uphaar_offers'>";
            })
            ->rawColumns(['slider_image','Actions'])
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
            'name' => 'required',
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        if ($files = $request->file('image')) {
            
            $fileName =  "uphaaar_gifts-".time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('Slider', $fileName);

        }
        $Slider=$this->Slider->storeData($request->all());
        $Slider->image=$fileName;
        $Slider->save();
        return response()->json(['success'=>'Slider added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $Slider)
    {
        return "working";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->Slider->findData($id);
        $html = '<div class="form-group error"></div>
                <label for="name">Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editname" name="name" value="'.$data->name.'" class="form-control" placeholder="Enter your Slider name">
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
                                    <img src="'.asset('storage/slider/'.$data->image).'" name="old_img" width="50px" height="50px">          
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
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'image_1' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
       
        if ($files = $request->file('image_1')) {
            $fileName =  "uphaaar_gifts-".time().'.'.$request->image_1->getClientOriginalExtension();
            $request->image_1->storeAs('Slider', $fileName);
            $Slider=Slider::find($request->id);
            $Slider->image=$fileName;
            $Slider->save();  
        }
        $Slider=$this->Slider->updateData($request->id, $request->only('name','image','Description'));
        

        return response()->json(['success'=>'Slider updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Slider->deleteData($id);
        return response()->json(['success'=>'Slider deleted successfully']);
    }
}
