<?php

namespace App\Http\Controllers\Admin;

use App\Models\meal;
use App\Models\drink;
use App\Models\customer;
use Illuminate\Http\Request;
use App\Models\customer_meal;
use App\Models\customer_drink;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;

class OrderController extends Controller
{
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
