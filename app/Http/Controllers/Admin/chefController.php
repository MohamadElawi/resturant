<?php

namespace App\Http\Controllers\Admin;
use App\Models\meal;
use App\Models\drink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chefController extends Controller
{
    
   public function Add_drink(){
    return view('chef.createDrinks');
}

public function save_drink(Request $request){

   drink::create([
       'name'=> $request->name,
       'price'=> $request->price,
   ]);
   return redirect()->back()->with(['success'=>'Add successfully']);
   
}

public function allDrink(){
    $drinks = drink::select('id','name','price')->get();
    return view('chef.AllDrinks', compact('drinks'));
}

public function delete_drink($drink_id){
    $drink = drink::find($drink_id);
    if(!$drink_id )
        return redirect()->back();
    $drink ->delete();
    return redirect()->route('all.drink')->with(['delete'=>'Deleted successfully']) ;
}

public function edit_drink($drink_id){
    $drink =drink::find($drink_id);
    if(!$drink )
        return redirect()->back();
    $drink =drink::select('id','name','price')->find($drink_id);
    return view ('chef.EditDrinks',compact('drink'));

}


public function update_drink(Request $request ,$drink_id){

    $drink =drink::find($drink_id);
    if(!$drink )
        return redirect()->back();
    $drink->update($request->all());
   
    return redirect()->back()->with(['seccessUpdate'=>'Updated successfully']);

}






public function Add_meal(){
    return view('chef.createMeal');
}


public function save_meal(Request $request){

    meal::create([
        'name'=> $request->name,
        'price'=> $request->price,
    ]);
    return redirect()->back()->with(['success'=>'Add successfully']);
    
 }

 public function allMeal(){
    $meals = meal::select('id','name','price')->get();
    return view('chef.AllMeals', compact('meals'));
}

public function delete_meal($meal_id){
    $meal = meal::find($meal_id);
    if(!$meal_id )
        return redirect()->back();
    $meal ->delete();
    return redirect()->route('all.meal')->with(['delete'=>'Deleted successfully']) ;
}

public function edit_meal($meal_id){
    $meal =meal::find($meal_id);
    if(!$meal )
        return redirect()->back();
    $meal=meal::select('id','name','price')->find($meal_id);
    return view ('chef.EditMeals',compact('meal'));

}


public function update_meal(Request $request ,$meal_id){

    $meal =meal::find($meal_id);
    if(!$meal)
        return redirect()->back();
    $meal->update($request->all());
   
    return redirect()->back()->with(['seccessUpdate'=>'Updated successfully']);

}

}
