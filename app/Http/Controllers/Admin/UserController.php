<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\validator;

class UserController extends Controller
{
    public function profile($id){
        $user =User::find($id);
        if($user){
            return view('user.profile')->withUser($user);
        }else{
           return redirect()->back();
        }
    }

    public function edit(){
        if(Auth::user()){
            $user =User::find(Auth::user()->id);

            if($user){
                return view ('user.edit')->withUser($user);
            } else
                return  redirect()->back();

         } else 
            return  redirect()->back();
    }

    public function update(Request $request){
        $user =User::find(Auth::user()->id);

        if ($user){
            if(Auth::user()->email === $request['email']){
                $validate =$request->validate([
                    'name'=>'required|min:2',
                    'email'=>'required|email',
                   // 'phone'=>'required|numeric'
                ]);
            } else {

                $validate =$request->validate([
                    'name'=>'required|min:2',
                    'email'=>'required|email|unique:users',
                    'phone'=>'required|numeric|unique:users'
                ]);
            }

            $user->name = $request['name'] ;
            $user->email = $request['email'];
            $user->phone = $request['phone'];

            $user->save();
            $request ->session() ->flash('success','تم لتعديل بنجاح');
            return redirect()->back() ;
           
        } else {

            return redirect()->back();

        }
    }
    public function passwordEdit(){
        if(Auth::user()){

                return view ('user.password');
            } else
                return  redirect()->back(); 
    }



    public function passwordUpdate(Request $request){
        $validate =$request->validate([
            'oldpassword'=>'required|min:7',
            'password'=>'required|min:7|required_with:password_confirmation',
        ]);

        $user =User::find(Auth::user()->id);

        if($user){
            if(Hash::check($request['oldpassword'], $user->password) && $validate){
                $user->password = Hash::make($request['password']);

                $user->save();
                $request ->session() ->flash('success',__('messages.Your Password Have Been Update'));
                return redirect()->back() ;

            } else {
                $request ->session() ->flash('error',__('messages.the entered does not match your current password'));
                return redirect()->back() ;
            }
        }

    }

}
