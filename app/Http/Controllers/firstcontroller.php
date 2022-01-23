<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use App\Models\employee ;
use App\Http\Requests\EmployeeRequest;

class firstcontroller extends Controller
{

     public function create(){
         return view('employee.create');
     }

    public function Store(Request $request){
        //validator befor insert data to database 
        $rules =$this->getRules();
        $messages=$this->getMessages();

        $validator= validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all()) ;
        }

        //insert data to database
        employee::create([
            'name'=> $request->name,
            'number'=> $request->number,
            'experience'=> $request->experience,
            'salary'=> $request->salary
        ]);
        return redirect()->back()->with(['success'=>__('messages.Add successfully')]) ;
       // return "saved successfull" ;
        
    }
    protected function getRules(){
        return $rules=[
            'name'=> 'required|max:25',
            'number'=> 'required|numeric',
            'experience'=> 'required',
            'salary'=> 'required'
        ]; 
    }

    protected function getMessages(){
        return  $messages =[
            'name.required'=>'يجب ادخال الاسم',
            'name.max:25'=>'الاسم كبير جدا ',
            'name.unique'=>'الاسم موجود ',
            'number.numeric'=>'رقم الهاتف يجب ان يكون رقم ',
            'number.required'=>'يجب ادخال رقم الهاتف',
            'salary.required'=>'يجب ادخال الراتب ',
            'experience.required'=>'يجب تعبئة المعلومات'
        ];

    }

}
