<?php

namespace App\Http\Controllers\Admin;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\validator;

class EmployeeController extends Controller
{
    public function GetAllEmployee()
    {
        $employees = employee::select('id', 'name', 'salary', 'number', 'experience')->get();
        return view('Admins.AllEmployees', compact('employees'));
    }

    public function create(){
        return view('employee.create');
    }

    public function Store(EmployeeRequest $request){
       //validator befor insert data to database 
    //    $rules =$this->getRules();
    //    $messages=$this->getMessages();

    //    $validator= validator::make($request->all());
    //    if($validator->fails()){
    //        return redirect()->back()->withErrors($validator)->withInputs($request->all()) ;
    //    }

       //insert data to database
       employee::create([
           'name'=> $request->name,
           'number'=> $request->number,
           'experience'=> $request->experience,
           'salary'=> $request->salary
       ]);
       return redirect()->back()->with(['success'=>__('messages.Add successfully')]) ;
       
   }


    public function EmployeeEdit($employee_id){
        $employee = employee::find($employee_id);
        if (!$employee)
            return redirect()->to(route('Get.All.Employee'));
        $employee = employee::select('id', 'name', 'number', 'salary', 'experience')->find($employee_id);
        return view('Admins.EmployeeEdit', compact('employee'));
    }



    

    public function EmployeeUpdate(EmployeeRequest $request,$employee_id)
    {
        $employee = employee::find($employee_id);
        if(!$employee )
            return redirect()->back();
         $employee ->update($request->all());
         return redirect()->back()->with(['seccessUpdate'=>__('messages.Updated successfully')]);
    }

    public function EmployeeDelete($employee_id){
        $employee = employee::find($employee_id);
        if(!$employee )
            return redirect()->back()->with(['faild'=>__('messages.Sorry, employee is not available')]);
        $employee ->delete();
        return redirect()->route('Get.All.Employee')->with(['delete'=>__('messages.Deleted successfully')]) ;
    }
}
