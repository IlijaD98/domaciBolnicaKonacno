<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Validator;

class MedicineController extends Controller
{
    //


    public function medicine(){
        return response()->json(Medicine::get(),200);
    }



    public function medicineById($id){
        $medicine=Medicine::find($id);
        if(is_null($medicine)){
            return response()->json(["message"=>"Response not found!"],404);

        }
        return response()->json($medicine,200);
    }

    public function medicineSave(Request $request){
        $rules=[
            'name'=>'required|min:3',
            'detail'=>'required|min:2|max:200',
            'company'=>'required|min:2|max:50',
            'quantity'=>'required',
        ];
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $medicine=Medicine::create($request->all());
        return response()->json($medicine,201);

    }

    public function medicineUpdate(Request $request,$id){
        $medicine=Medicine::find($id);
        if(is_null($medicine)){
            return response()->json(["message"=>"Response not found!"],404);
        }
        $medicine->update($request->all());
        return response()->json($medicine,200);

    }


    public function medicineDelete(Request $request,$id){
        $medicine=Medicine::find($id);
        if(is_null($medicine)){
            return response()->json(["message"=>"Response not found!"],404);
        }
        $medicine->delete();
        return response()->json(null,204);

    }


   

    
}
