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
        // ล็อกอิน ดึงข้อมูล มาจากฐานข้อมูล 
            $results = DB::select('select * from member where Member_username = :username', ['username' => ($request->uname)]);
            if($results != null){
                foreach ($results as $name => $title) {
                    if(($request->uname) == ($title->Member_username)){ 
                        if($request->pswd ==  $title->Member_password ){
                  
                            session()->put('user-login',$title);
                             Alert::success('ล็อกอินสำเร็จ')->autoclose(2000);
                             return redirect('/');
                        }else{
                             echo "รหัสไม่ถูกต้อง";
                            Alert::error('รหัสไม่ถูกต้อง')->autoclose(2000);
                            return redirect('/');
                        }                    
                    }else { //ถ้าไม่ใช่ ให้ไปหาที่ตาราง admin
                        echo "66";
                        Alert::error('ชื่อผู้ใช้ไม่ถูกต้อง')->autoclose(2000);
                        return redirect('/');
                    }
                }
            }else {
                $admin =  DB::select('select * from admins where Admin_username = :username', ['username' => ($request->uname)]);
                if($admin != null){
                    foreach ($admin as $name => $title) {
                        if(($request->uname) == ($title->Admin_username)){ 
                            if($request->pswd ==  $title->Admin_password ){
                  
                                session()->put('admin-login',$title);
                                 Alert::success('ล็อกอินสำเร็จ')->autoclose(2000);
                                 return redirect('/');
                            }else{
                                 echo "รหัสไม่ถูกต้อง";
                                Alert::error('รหัสไม่ถูกต้อง')->autoclose(2000);
                                return redirect('/');
                            }
                        }else{
                            Alert::error('ชื่อผู้ใช้ไม่ถูกต้อง')->autoclose(2000);
                            return redirect('/');
                            }
                    }
                }else{
                    Alert::error('ชื่อผู้ใช้ไม่ถูกต้อง')->autoclose(2000);
                    return redirect('/');  
                }
    }
}
    public function Logout(){

        session()->forget('user-login');
        session()->forget('admin-login');
        return redirect('/');
    }
    

    

    public function check_user(Request $request){  
          $newformat = Date($request -> birth);
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
            ]);
        Alert::success('สมัครสมาชิกสำเร็จ')->autoclose(2000);
        session()->put('user-login',$request -> fname,$request -> Lname,$request -> uname, $request -> pswd, $request -> email);
        // ตรวจเสร็จ ว่ามี ผู้ใช้ จะไปยังหน้าหลัำก
        return redirect('/');
    }
}
