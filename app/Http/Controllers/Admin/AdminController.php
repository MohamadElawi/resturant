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
    // public function loginAdmin()
    // {
    //     return view('auth.loginAdmin');
    // }

    // public function CheckAdmin(request $request)
    // {

    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
    //         return redirect()->intended('/');

    //     return back()->withinput($request->only('email'));
    // }


    ############################################

    public function GetAllEmployee()
    {
        $employees = employee::select('id', 'name', 'salary', 'number', 'experience')->get();
        return view('Admins.All', compact('employees'));
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
//__('messages.Updated successfully')]);
    public function EmployeeDelete($employee_id){
        $employee = employee::find($employee_id);
        if(!$employee )
            return redirect()->back()->with(['faild'=>__('messages.Sorry, employee is not available')]);
        $employee ->delete();
        return redirect()->route('Get.All.Employee')->with(['delete'=>__('messages.Deleted successfully')]) ;
    }

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



    public function setMealsDrinks(){
    $meals =meal::select('id','name','price')->get();
    $drinks =drink::select('id','name','price')->get();
    

    return view('customer.order',compact('meals','drinks'));
    }

    public function saveOrder(CustomerRequest $request){
        /// valdaite
        /// send data to db
        customer::create([
            'name' => $request ->name ,
            'number' => $request->number,
        ]);
        ################################
        $customer_id =customer::select('id')->get()->last()->id;
        $customer =customer::find($customer_id);
        if(!$customer)
            return abort('404');
        $customer ->drinks()->syncwithoutdetaching($request->drink_id);
        $customer ->meals()->syncwithoutdetaching($request->meal_id);    
        ################################
         return redirect()->back()->with(['success' => 'تم تسجيل طلبك بنجاح']);

         customer_meal::create(['meal_id'=> $request->meal_id,'customer_id'=>$customer_id]);
        customer_drink::create(['drink_id'=> $request->drink_id,'customer_id'=>$customer_id]);
    }



    public function GetAllOrder(){
         $AllCustomers =customer::with(['drinks'=>function($q){
             $q->select('drinks.id','drinks.name','price');
         }])->get();
       // $drinks = 
        //  $AllOrderDrinks =customer::with(['drink'=> function($q){
        //      $q->select('drinks.id','drink.name','price');
        //  }])->get();
        
        return view ('customer.AllOrder',compact('AllCustomers'));
    }

    public function viewOrderMeals($AllCustomer_id){
        $customerOrders =customer::find($AllCustomer_id);
        $totalprice =0 ;
        if(!$customerOrders)
            return redirect()->back();
        $customerOrders =customer::with(['meals'=>function($q){
            $q->select ('meals.id','name','price');
        }])   ->find($AllCustomer_id) ;
       $orderMeals =$customerOrders->meals;
       $orderDrinks =$customerOrders->drinks;
       if($orderMeals){

            foreach($orderMeals as $orderMeal){
                $totalprice = $totalprice + $orderMeal->price ;
                    }
             }
       
         if($orderDrinks){

             foreach($orderDrinks as $orderDrink)  {
                    $totalprice =$totalprice + $orderDrink->price ;
             }            
        }       
        return view('customer.viewOrderMeals',compact('orderMeals','orderDrinks','totalprice'));
    }
    
    

}
