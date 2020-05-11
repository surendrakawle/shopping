<?php

namespace App\Http\Controllers;

use App\Catelog;
use Illuminate\Http\Request;

class CatelogController extends Controller
{
    public function __construct()
    {
        $this->Catelog = new Catelog;
        $this->title = 'Catelog';
        $this->path = 'admin/catalogue/';
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

   public function getCatalogue(){
    $data = $this->Catelog->getData();
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
            'catelogue_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->Catelog->storeData($request->all());

        return response()->json(['success'=>'Catalogue added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catelog  $catelog
     * @return \Illuminate\Http\Response
     */
    public function show(Catelog $catelog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catelog  $catelog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->Catelog->findData($id);

        $html = '<div class="form-group error"></div>
                <label for="catelogue_name">Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editcatelogue_name" name="editcatelogue_name" value="'.$data->catelogue_name.'" class="form-control" placeholder="Enter your catalogue name">
                    </div>
                </div>
                <label for="description">Description</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editDescription" name="editDescription" value="'.$data->description.'" class="form-control" placeholder="Enter your description">
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
     * @param  \App\Catelog  $catelog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = \Validator::make($request->all(), [
            'catelogue_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->Catelog->updateData($id, $request->all());

        return response()->json(['success'=>'Catalogue updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catelog  $catelog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Catelog->deleteData($id);

        return response()->json(['success'=>'Catalogue deleted successfully']);
    }
}
