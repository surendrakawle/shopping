<?php

namespace App\Http\Controllers;

use App\Category;
use App\Catelog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->Category = new Category;

        $this->title = 'Category';
        $this->path = 'admin/category/';
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

    public function getCategory(Request $request)
    {
        $data = $this->Category->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditProductData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteProductModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->addColumn('catalogue',function($data){
                $catalogue=Catelog::where("id",$data->catelogue_id)->get()->first();
                if($catalogue)
                return $catalogue->catelogue_name;
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
            'categories_name' => 'required',
            'catelogue_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->Category->storeData($request->all());

        return response()->json(['success'=>'Category added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return "working";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->Category->findData($id);
        $catalogue = Catelog::get();
        $html = '<div class="form-group error"></div>
                <label for="categories_name">Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="editcategories_name" name="editcategories_name" value="'.$data->categories_name.'" class="form-control" placeholder="Enter your category name">
                    </div>
                </div>
                <label for="catelogue_id">Catalogue</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control" id="editcatelogue_id" name="editcatelogue_id">
                            <option value="">-- Please select --</option>';
                           foreach($catalogue as $key)
                           {
                            $status="";
                            if($data->catelogue_id==$key->id){
                                $status="selected";
                               }
                            $html .= '<option value="'.$key->id.'" '.$status.'>'.$key->catelogue_name.'</option> ';
                           }
        $html .= '         </select>
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'categories_name' => 'required',
            'catelogue_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->Category->updateData($id, $request->all());

        return response()->json(['success'=>'Category updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Category->deleteData($id);
        return response()->json(['success'=>'Category deleted successfully']);
    }
}
