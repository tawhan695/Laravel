<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
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
        $results = DB::select('select * from member where Member_username = :username', ['username' => ($request -> uname)]);
        foreach ($results as $name => $title) {
           session()->put('user-login',$title);
        }
        return redirect('/');
    }

    public function updateprofile(Request $request){
        // session()->forget('user-login');
         $newformat = Date($request -> birth);
        //  $dateNow = Date();
        $id = DB::table('member')->where('Member_username', session()->get('user-login')->Member_username)->update(
             [
            'Member_titel' => $request -> title_name,
            'Member_name' => $request -> fname,
            'Member_last_name' => $request -> Lname,
            'Date_birth'=>  $newformat,
            'Member_age' => intval($request -> age),
            'End_heiht' => floatval($request -> heiht),
            // 'Member_username' => $request -> uname,
            'Member_password' => $request -> pswd,
            'Member_email' =>  $request -> email
            ]);
        //     session()->reflash();
        $up = DB::select('select * from member where Member_username = :username', ['username' => (session()->get('user-login')->Member_username)]);
        foreach ($up as $name => $title) {
           session()->put('user-login',$title);

        }


         //  session()->forget('admin-login');
        // session()->flash('status', 'Task was successful!');
        //  session()->put('user-login',$request -> fname,$request -> Lname,$request -> uname, $request -> pswd, $request -> email);
        // ตรวจเสร็จ ว่ามี ผู้ใช้ จะไปยังหน้าหลัำก
        Alert::success('บันทึกสำเร็จ')->autoclose(2000);
        return redirect('profile');
     

    }
    public function insertcar(Request $request){
        echo $request->data_name ."\n\r";
        echo $request->Data_engine_size ."\n\r";
        echo $request->price ."\n\r";
        echo $request->Data_using ."\n\r";
        echo "รูป :"."\n\r";
        echo $request->Date_years ."\n\r";
        echo $request->show_type ."\n\r";
        echo $request->Ignition_system ."\n\r";
        echo $request->Fuel_type ."\n\r";
        echo $request->Fuel_supply_system ."\n\r";
        echo $request->Fuel_tank_capacity ."มม."."\n\r";
        echo $request->Suspension_system ."\n\r";
        echo $request->Brake_system ."\n\r";
        echo $request->Tire_size ."\n\r";
        echo $request->weight."กก."."\n\r";
        echo $request->age."\n\r";
        echo $request->sex."\n\r";
        echo $request->heigh."\n\r";
        $SizeCar = $request->Size."x".$request->Size2."x".$request->Size3."มม."."\n\r";
        // $id = DB::table('data')->insertGetId(
        //     [
        //     // 'Member_id' => nullable();
        //     'Data_name' => $request -> Data_name,
        //     'Data_engine_size' => floatval($request -> Data_engine_size),
        //     'price' => $request -> price,
        //     'Data_image'=>  " ",
        //     'Date_years' => intval($request -> Date_years),
        //     'show_type' => $request -> show_type,
        //     'Ignition_system' => $request -> Ignition_system,
        //     'Fuel_type' => $request -> Fuel_type,
        //     'Fuel_supply_system' =>  $request -> Fuel_supply_system,
        //     'Fuel_tank_capacity' =>  $request -> Fuel_tank_capacity,
        //     'Suspension_system' =>  $request -> Suspension_system,
        //     'Brake_system' =>  $request -> Brake_system,
        //     'Tire_size' =>  $request -> Tire_size,
        //     'Size' =>  $request -> $SizeCar,
        //     'weight' =>  $request -> weight,
        //     ]);
       
    }
    public function showproduct(Request $request){
        return view('showproduct');
       
    }
  
}
