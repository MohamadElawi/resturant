<?php


Route::get('/', function () {
    return view('index');
})->name('index.html');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
   

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    Route::get('home/admin', 'HomeController@indexAdmin')->name('home.admin')->middleware('auth','admin');

    Route::get('home/chef', 'HomeController@indexChef')->name('home.chef')->middleware('auth','chef');

################## employee ################

    Route::group(['prefix'=>'employee','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
   

        Route::get('create','EmployeeController@create' )->name('employee.create');
        Route::post('store',  'EmployeeController@store')->name('employee.store');
        Route::get('allEmployee','EmployeeController@GetAllEmployee' )->name('Get.All.Employee');

        Route::get('edit/{employee_id}','EmployeeController@EmployeeEdit' )->name('employee.edit');
        Route::post('Update/{employee_id}','EmployeeController@EmployeeUpdate' )->name('employee.Update');
    
        Route::get('delete/{employee_id}', 'EmployeeController@EmployeeDelete')->name('employee.delete');
    });
    
########### order #############

Route::group(['namespace'=>'admin'],function () {
    
    Route::get('SetMEalsDrinks', 'OrderController@setMealsDrinks')->name('Maels.drinks')->middleware('auth');
    
    Route::post('save_Order', 'OrderController@saveOrder')->name('save.order.customer')->middleware('auth');
    
    Route::get('order/{customer_id}','OrderController@order')->name('order');
    
    Route::get('get-All-Order','OrderController@GetAllOrder' )->name('Get.All.Order')->middleware('auth','chef');
    
    Route::get('ViewOrder', 'OrderController@GetAllOrder')->name('View.order');
    
    Route::get('orderMeals/{AllCustomer_id}','OrderController@viewOrderMeals')->name('order.meals');
    
    
    });

    ############## edit user by admin ###########

    Route::group(['namespace'=>'Admin','middleware'=>['auth','admin']],function(){
    Route::get('GetAllUsers', 'admincontroller@GetAllUser')->name('all.users');

    Route::get('/delete/User/{user_id}', 'admincontroller@deleteUser')->name('delete.user');

    Route::get('/edit/user/{user_id}', 'admincontroller@EditUser')->name('edit.user');

    Route::post('/update/user/{user_id}', 'admincontroller@UpdateUser')->name('update.user');

});
    ###########  user profile operation ###########

    Route::group(['namespace'=>'Admin'],function(){

        Route::get('user/{id}', 'UserController@profile')->name('user.profile');
    
        Route::get('/edit/user', 'UserController@edit')->name('user.edit');
        Route::post('/update/user', 'UserController@update')->name('user.update');
    
        Route::get('/edit/password/user', 'UserController@passwordEdit')->name('password.edit');
        Route::post('/update/password/user', 'UserController@passwordUpdate')->name('password.update');
    });

});
    

    ####################### views #######################

    Route::view('about/res', 'front/about')->name('about.resturant');
   
     Route::view('feature/res', 'front/feature')->name('feature.resturant');

     Route::view('Booking/res', 'front/Booking')->name('Booking.resturant');

     Route::view('Contact/res', 'front/Contact')->name('Contact.resturant');

     Route::view('Menue/res', 'front/Menue')->name('Menue.resturant');

     Route::view('Team/res', 'front/Team')->name('Team.resturant');

     Route::post('/booking','form_html@show')->name('booking');

     Route::get('/getdata','form_html@getdata')->name('getdata');

    ########### meals and drinks ##################

Route::group(['namespace'=>'Admin','middleware'=>['auth','chef']],function () {

    Route::get('add/meal', 'chefController@Add_meal')->name('add.meal');

    Route::post('save/meal', 'chefController@save_meal')->name('meal.store');

    Route::get('all/meal', 'chefController@allMeal')->name('all.meals');

    Route::get('delete/meal/{meal_id}', 'chefController@delete_meal')->name('delete.meal');

    Route::get('edit/meal/{meal_id}', 'chefController@edit_meal')->name('edit.meal');

    Route::post('update/meal/{meal_id}', 'chefController@update_meal')->name('update.meal');




    Route::get('add/drink', 'chefController@Add_drink')->name('add.drink');

    Route::post('save/drink', 'chefController@save_drink')->name('drink.store');

    Route::get('all/drink', 'chefController@allDrink')->name('all.drinks');

    Route::get('delete/drink/{drink_id}', 'chefController@delete_drink')->name('delete.drink');

    Route::get('edit/drink/{drink_id}', 'chefController@edit_drink')->name('edit.drink');

    Route::post('update/drink/{drink_id}', 'chefController@update_drink')->name('update.drink');

});





