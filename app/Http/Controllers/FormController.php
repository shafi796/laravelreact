<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FieldRequest;

use App\Form;

class FormController extends Controller
{
    //

    public function create(){
         $datas= Form::all();
     

         return view('create',['datas' => $datas]);
    }

    public function store(FieldRequest $request){
        $validatedData = $request->validated();
        Form::create($validatedData);

        // return response()->json('Form is successfully validated and data has been saved'); 
        return redirect('form')->with('status', 'New book was added');;
        

    }
}
