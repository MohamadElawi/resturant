<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

setcookie("login","channel",time()+86400 ,"/",true,true);


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



    Route::group(['prefix'=>'employee','middleware'=>['auth','admin']],function(){
   

        Route::get('create','firstcontroller@create' )->name('create');
        Route::post('store',  'firstcontroller@store')->name('employee.store');
    });
    




Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
   
    

    Route::get('allEmployee','Admincontroller@GetAllEmployee' )->name('Get.All.Employee');

    Route::get('editEmployee/{employee_id}','Admincontroller@EmployeeEdit' )->name('employee.edit');
    Route::post('UpdateEmployee/{employee_id}','Admincontroller@EmployeeUpdate' )->name('employee.Update');

    Route::get('deleteEmployee/{employee_id}', 'Admincontroller@EmployeeDelete')->name('employee.delete');
    
   // Route::get('page', 'Admincontroller@Admin_page')->name('admin.page');
});


Route::group(['namespace'=>'admin'],function () {
    
    Route::get('SetMEalsDrinks', 'admincontroller@setMealsDrinks')->name('Maels.drinks')->middleware('auth');
    
    Route::post('save_Order', 'admincontroller@saveOrder')->name('save.order.customer')->middleware('auth');
    
    Route::get('order/{customer_id}','admincontroller@order')->name('order');
    
    Route::get('get-All-Order','admincontroller@GetAllOrder' )->name('Get.All.Order')->middleware('auth','chef');
    
    Route::get('ViewOrder', 'admincontroller@GetAllOrder')->name('View.order');
    
    Route::get('orderMeals/{AllCustomer_id}','admincontroller@viewOrderMeals')->name('order.meals');
    
    
    });



    Route::get('GetAllUsers', 'Admin\admincontroller@GetAllUser')->name('all.users')->middleware('auth','admin');

    Route::get('deleteUser/{user_id}', 'Admin\admincontroller@deleteUser')->name('delete.user');

    Route::get('/edit/user/{user_id}', 'Admin\admincontroller@EditUser')->name('edit.user');

    Route::post('/update/user/{user_id}', 'Admin\admincontroller@UpdateUser')->name('update.user');



    Route::group(['namespace'=>'Admin'],function(){

        Route::get('user/{id}', 'UserController@profile')->name('user.profile');
    
        Route::get('/edit/user', 'UserController@edit')->name('user.edit');
        Route::post('/update/user', 'UserController@update')->name('user.update');
    
        Route::get('/edit/password/user', 'UserController@passwordEdit')->name('password.edit');
        Route::post('/update/password/user', 'UserController@passwordUpdate')->name('password.update');
    });

});
    

    ##############################################

    Route::view('about/res', 'front/about')->name('about.resturant');
   
     Route::view('feature/res', 'front/feature')->name('feature.resturant');

     Route::view('Booking/res', 'front/Booking')->name('Booking.resturant');

     Route::view('Contact/res', 'front/Contact')->name('Contact.resturant');

     Route::view('Menue/res', 'front/Menue')->name('Menue.resturant');

     Route::view('Team/res', 'front/Team')->name('Team.resturant');

     ROUTE::post('/booking','form_html@show')->name('booking');

     ROUTE::get('/getdata','form_html@getdata')->name('getdata');


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





