<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Models\meal;
use App\Models\drink;
use App\Models\customer;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Models\customer_meal;
use App\Models\customer_drink;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\EmployeeRequest;

class AdminController extends Controller
{


    ############################################

   

    // public function customer_order(){
    //     return view('user.order');
    // }

    public function GetAllUser(){
        $users = User::select('id','name','email','phone','User_type')->get();
        return view('Admins.AllUsers', compact('users'));
    }

    public function deleteUser($user_id){
        $user = User::find($user_id);
        if(!$user )
            return redirect()->back()->with(['faild'=>__('messages.Sorry, user is not available')]);
        $user ->delete();
        return redirect()->route('all.users')->with(['delete'=>__('messages.Deleted successfully')]) ;
    }

    public function EditUser($user_id){
        $user =User::find($user_id);
        if(!$user )
            return redirect()->back()->with(['faild'=>__('messages.Sorry, user is not available')]);
        $user =User::select('id','name','phone')->find($user_id);
        return view ('Admins.editUser',compact('user'));
        
    }

    public function UpdateUser(Request $request,$user_id){
        $user =User::find($user_id);
        if(!$user )
            return redirect()->back();
        $user->User_type =$request['User_type'];
        $user->save();
        return redirect()->route('all.users');
    }



    

}
