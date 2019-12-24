<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{   
 
    public function Login(Request $request){
       



        // $roles = DB::table('member')->pluck('Member_name','Member_username');
        $users = DB::table('member')->select('Member_name','Member_last_name','Member_username','Member_password','Member_email')->get();
        foreach ($users as $name => $title) {
     
            
            if($request->uname == $title->Member_username){
                if($request->pswd ==  $title->Member_password ){
                  
                    session()->put('user-login',$title->Member_name,$title->Member_last_name,$title->Member_username, $title->Member_password, $title->Member_email);
                    $user = session()->get('user-login');
                    // echo   $user->Member_name;
                    // echo   $user->Member_last_name;
                    // echo   $user->Member_username;
                    // echo   $user->Member_password;
                    // echo   $user->Member_email;
                    // return view('index')->with($user->Member_name);
                     Alert::success('ล็อกอินสำเร็จ')->autoclose(2000);
                    // toast('ล็อกอินสำเร็จ','success');
                //<script>Swal.fire({position: 'top-end',icon: 'success',title: 'ล็อกอินสำเร็จ',showConfirmButton: false,timer: 1500})</script>
                     return redirect('/');
                }else{
                    echo "รหัสไม่ถูกต้อง";
                }
         
            }else{
                echo "ชื่อผู้ใช้ไม่ถูกต้อง";
            }
        }
      
    //    if($request->uname == 'user'){
    //     $request-> session()->put('user',$request->input());
    //     $user = $request->session()->get('user');
    //     print_r($user['uname']);
    //     $status =true;
    //     return view('index');
    //    }elseif($request->uname != 'user'){


    //    }

        // $request-> session()->put('info',$request->input());
        // $info = $request->session()->get('info');
        // print_r($info['uname']);
        // // if(){}
    }
    public function Logout(){

        session()->forget('user-login');
        return redirect('/');
    }
    


    public function check_user(Request $request){
        //   print_r($request->input());
        //   print_r( $request -> title_name);

          $time = strtotime($request -> birth);

          $newformat = date('Y-m-d',$time);

          print_r($newformat);



          $user = new Member;
          $user -> Member_id='';
          $user -> Member_titel = $request -> title_name;
          $user -> Member_name = $request -> fname;
          $user -> Member_last_name = $request -> Lname;
          $user -> Date_birth =  $newformat;
          $user -> Member_age = $request -> age;
          $user -> End_heiht = $request -> heiht;
          $user -> Member_username = $request -> uname;
          $user -> Member_password = $request -> pswd;
          $user -> Member_email =  $request -> email;
          //print_r($user);
          $user->save();
          //return redirect()->route('/')->with('success','บันทึกข้อมูนเรียบร้อย');
    }
}
