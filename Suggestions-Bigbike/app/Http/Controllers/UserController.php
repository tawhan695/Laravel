<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Schema;
class UserController extends Controller
{   
 
    public function Login(Request $request){
       



        // $roles = DB::table('member')->pluck('Member_name','Member_username');
        $users = DB::table('member')->select('Member_name','Member_last_name','Member_username','Member_password','Member_email')->get();
        foreach ($users as $name => $title) {
     
            
            if($request->uname == $title->Member_username){
                if($request->pswd ==  $title->Member_password ){
                  
                    session()->put('user-login',$title);
                    $user = $user = session()->get('user-login');;
                    // echo   $user->Member_name;
                    // echo   $user->Member_last_name;
                    echo session()->get('user-login')->Member_username;
                    // $value = session('user-login', 'Member_username');
                    // echo $value;
                    // echo   $user->Member_username;
                    // echo   $user->Member_password;
                    // echo   $user->Member_email;
                    // return view('index')->with($user->Member_name);
                     Alert::success('ล็อกอินสำเร็จ')->autoclose(2000);
                    // toast('ล็อกอินสำเร็จ','success');
                //<script>Swal.fire({position: 'top-end',icon: 'success',title: 'ล็อกอินสำเร็จ',showConfirmButton: false,timer: 1500})</script>
                     return redirect('/');
                }else{
                    // echo "รหัสไม่ถูกต้อง";
                }
         
            }else{
                // echo "ชื่อผู้ใช้ไม่ถูกต้อง";
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

        //   $time = strtotime();

          $newformat = Date($request -> birth);

        //   $user = new Member;
        //   $user -> Member_id=2;
        //   $user -> Member_titel = $request -> title_name;
        //   $user -> Member_name = $request -> fname;
        //   $user -> Member_last_name = $request -> Lname;
        //   $user -> Date_birth =  $newformat;
        //   $user -> Member_age = $request -> age;
        //   $user -> End_heiht = $request -> heiht;
        //   $user -> Member_username = $request -> uname;
        //   $user -> Member_password = $request -> pswd;
        //   $user -> Member_email =  $request -> email;
        //   print_r($user);
        // echo ($request -> title_name);
        // var_dump(intval($request -> age));
        $id = DB::table('member')->insertGetId(
            [
            // 'Member_id' => nullable();
            'Member_titel' => $request -> title_name,
            'Member_name' => $request -> fname,
            'Member_last_name' => $request -> Lname,
            'Date_birth'=>  $newformat,
            'Member_age' => intval($request -> age),
            'End_heiht' => floatval($request -> heiht),
            'Member_username' => $request -> uname,
            'Member_password' => $request -> pswd,
            'Member_email' =>  $request -> email
            ]
            
        );
        //  dd($id);
        // $id = DB::table('test')->insertGetId(['name' => 1]);
     
        // 
        Alert::success('สมัครสมาชิกสำเร็จ')->autoclose(2000);
        //   $user->save();
        session()->put('user-login',$request -> fname,$request -> Lname,$request -> uname, $request -> pswd, $request -> email);
       
        return redirect('/');
    }
}
