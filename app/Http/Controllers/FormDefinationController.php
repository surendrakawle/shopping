<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormDefination;
class FormDefinationController extends Controller
{
    public function index(Request $request)
    {

       $form =FormDefination::where('name','=',$request->name)->first();
        return $form;
    }
}
