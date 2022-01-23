<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


use Auth;




class form_html extends Controller
{

     public  function  show (Request $req)
       { 
        
           $users=DB::table('users')->get();

           $id_user = $req->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

           $fake = $req->session()->all();

          
       
          
           
           $userbook=DB::table('users')->get();
           foreach ($userbook as $user) {
               
               $user->book=$req->book;
               if($user->book)
               {
              
                DB::table('users')->where('id',$id_user)->update(['book'=>"yes"]);
                //DB::table('users')->where('id',$id_user)->update(['email'=>$user->email]);
                //DB::table('users')->where('id',$id_user)->update(['Mobile'=>$user->Mobile]);
                //DB::table('users')->where('id',$id_user)->update(['Time'=>$user->Time]);
               // DB::table('users')->where('id',$id_user)->update(['Date'=>$user->Date]);
                /*if($user->Reservation=="yes")
                {DB::table('users')->where('id',$id_user)->update(['Reservation'=>$user->Reservation]);}
    if($user->Reservation!="yes")
                { return view('not_reservation');}
                */
                
               }
               /*if($a==0) {
                    $a++;
                  //  return redirect()->away('http://127.0.0.1:8000/');        
	           return view('index');
               }
               return view('index');*/
           }



           return redirect()->route('getdata');


      
          
       
               
          
          
              
           
       

      
         
          
          
            
           //echo '<a href=http://127.0.0.1:8000/><H1>  try again    </H1></a>';
          
              //request()->validate(['name'=>'requierd']);
              
              //$user->save();

              /*if ( $user->country and $user->phone )
              {
           return redirect()->back();
              }
              else
              {
                     echo "lol you dont insert correct ~~~~ ";
              }*/

       }






       public  function getdata(Request $req)
       {
     

           $users=DB::table('users')->get();
           //$id_user = $req->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
          
           $uuu = User::count();  //بتعطيك كم واحد بالداتا بيز

          
         $counter=0;
         $coutomer_table=2;
         $id_user = $req->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
           foreach ($users as $user) {
                    
             

               
            if($user->book !=NULL )
            {
               $counter++;
            }
            
            
        }
        if($counter<=$coutomer_table)
            {
               
               return  redirect()->back()->with(['booking'=>'correct_reservation']);
              
            }
            else 
            {
               DB::table('users')->where('id',$id_user)->update(['book'=>NULL]);
              
              
              
               return  redirect()->back()->with(['booking'=>'not_correct_reservation']);
            }



    
}
            
           
       

      
         
          
          
            
           //echo '<a href=http://127.0.0.1:8000/><H1>  try again    </H1></a>';
          
              //request()->validate(['name'=>'requierd']);
              
              //$user->save();

              /*if ( $user->country and $user->phone )
              {
           return redirect()->back();
              }
              else
              {
                     echo "lol you dont insert correct ~~~~ ";
              }*/


















             




















       }
    

?>

