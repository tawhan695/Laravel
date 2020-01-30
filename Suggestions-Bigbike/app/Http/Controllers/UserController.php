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
    //    xc ;
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

    public function searchdata(Request $request){
       $type = $request->type;
       $age = $request->age;
       $hight = $request->hight;
       $AGE = intval($age);
       $HIGHT =intval($hight);

    //    ขับขี่ในสนาม
    // search:555 16
    // search:556 188

       $s_age;
       $s_hight;
       $s_type;
       $s_sex;
       $data;

       $s_sex = session()->get('user-login')->Member_titel;
       if($s_sex == 'นาย'){
            $s_sex = 'ชาย';
       }elseif($s_sex == 'นาง'){
            $s_sex = 'หญิง';
       }elseif($s_sex == 'นางสาว'){
            $s_sex = 'หญิง';
       }

       
       if($type == 'ขับขี่ในเมือง'){
                  
                  if ($AGE  >= 41 && $AGE  <= 60) {

                        if ($HIGHT  >= 180) {

                            $s_age ='41-60';
                            $s_hight = '180>';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                            $s_age ='41-60';
                            $s_hight = '170-179';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                            $s_age ='41-60';
                            $s_hight = '160-169';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }
                  }elseif( $AGE  >= 21 && $AGE  <= 40){
                        if ($HIGHT  >= 180) {
                            $s_age ='21-40';
                            $s_hight = '180>';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                            $s_age ='21-40';
                            $s_hight = '170-179';
                            $s_type = 'ขับขี่ในเมือง';
                            
                            try {
                                $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight AND sex = :s_sex",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight),'s_sex'=>($s_sex)]);
                            } catch (\Throwable $th) {
                                $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                               }
                           
                        }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                            $s_age ='21-40';
                            $s_hight = '160-169';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }
                  }elseif($AGE  >= 15 && $AGE  <= 20){
                        if ($HIGHT  >= 180) {
                            $s_age ='15-20';
                            $s_hight = '180>';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                            $s_age ='15-20';
                            $s_hight = '170-179';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                            $s_age ='15-20';
                            $s_hight = '160-169';
                            $s_type = 'ขับขี่ในเมือง';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }
                  }

       }elseif($type == 'ขับขี่ในสนาม'){

                if ($AGE  >= 41 && $AGE  <= 60) {

                    if ($HIGHT  >= 180) {
                        $s_age ='41-60';
                        $s_hight = '180>';
                        $s_type = 'ขับขี่ในสนาม'; 
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);                
                    }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                        $s_age ='41-60';
                        $s_hight = '170-179';
                        $s_type = 'ขับขี่ในสนาม';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);    
                    }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                        $s_age ='41-60';
                        $s_hight = '160-169';
                        $s_type = 'ขับขี่ในสนาม';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                    }
            }elseif( $AGE  >= 21 && $AGE  <= 40){
                if ($HIGHT  >= 180) {
                    $s_age ='21-40';
                    $s_hight = '180>';
                    $s_type = 'ขับขี่ในสนาม'; 
                    try {
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight AND sex = :s_sex",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight),'s_sex'=>($s_sex)]);
                    } catch (\Throwable $th) {
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                       }            
                }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                    $s_age ='21-40';
                    $s_hight = '170-179';
                    $s_type = 'ขับขี่ในสนาม';  
                    $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);  
                }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                    $s_age ='21-40';
                    $s_hight = '160-169';
                    $s_type = 'ขับขี่ในสนาม';
                    $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                }
            }elseif($AGE  >= 15 && $AGE  <= 20){
                if ($HIGHT  >= 180) {
                    $s_age ='15-20';
                    $s_hight = '180>';
                    $s_type = 'ขับขี่ในสนาม'; 
                    $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);         
                }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                    $s_age ='15-20';
                    $s_hight = '170-179';
                    $s_type = 'ขับขี่ในสนาม';
                    $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);    
                }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                    $s_age ='15-20';
                    $s_hight = '160-169';
                    $s_type = 'ขับขี่ในสนาม';
                    $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                }
                }


            }elseif($type == 'เดินทางไกล'){

                    if ($AGE  >= 41 && $AGE  <= 60) {

                        if ($HIGHT  >= 180) {
                            $s_age ='40-60';
                            $s_hight = '180>';
                            $s_type = 'เดินทางไกล';
                            try {
                                $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight AND sex = :s_sex",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight),'s_sex'=>($s_sex)]);
                            } catch (\Throwable $th) {
                                $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                               }              
                        }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                            $s_age ='40-60';
                            $s_hight = '170-179';
                            $s_type = 'เดินทางไกล';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);    
                        }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                            $s_age ='40-60';
                            $s_hight = '160-169';
                            $s_type = 'เดินทางไกล';
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        }
                }elseif( $AGE  >= 21 && $AGE  <= 40){
                    if ($HIGHT  >= 180) {
                        $s_age ='21-40';
                        $s_hight = '180>';
                        $s_type = 'เดินทางไกล';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);                 
                    }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                        $s_age ='21-40';
                        $s_hight = '170-179';
                        $s_type = 'เดินทางไกล';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);    
                    }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                        $s_age ='21-40';
                        $s_hight = '160-169';
                        $s_type = 'เดินทางไกล';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                        try {
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight AND sex = :s_sex",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight),'s_sex'=>($s_sex)]);
                        } catch (\Throwable $th) {
                            $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                           }
                    }
                }elseif($AGE  >= 15 && $AGE  <= 20){
                    if ($HIGHT  >= 180) {
                        $s_age ='15-20';
                        $s_hight = '180>';
                        $s_type = 'เดินทางไกล';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);                 
                    }elseif( $HIGHT  >= 170 && $HIGHT  <= 179){
                        $s_age ='15-2040-60';
                        $s_hight = '170-179';
                        $s_type = 'เดินทางไกล'; 
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);   
                    }elseif($HIGHT  >= 160 && $HIGHT  <= 169){
                        $s_age ='15-2040-60';
                        $s_hight = '160-169';
                        $s_type = 'เดินทางไกล';
                        $data = DB::select("select * from data where Data_using = :s_type AND age=:s_age AND height =:s_hight",['s_type' => ($s_type),'s_age'=>($s_age),'s_hight'=>($s_hight)]);
                    }
                }
       }
        return response()->json(['success'=>$data]);
    }

    public function insertcar(Request $request){
      ///  print_r($request->all());

        // $request->data_name;          // ชื่อสินค้า
        // $request->Data_engine_size;   //ขนาดเครื่องยนต์
        // $request->price;   //ราคา
        
        //$img = $request->file('imgInp');
        $img = $request->file('imgInp')->store('public');
        // print_r(str_replace("public","storage", $img));
        // print_r($img);
        // $request->imgInp;  //เพิ่มรูป
        // $request->Date_years;   //ปีที่ผลิต
        // $request->show_type;   //ประเภท
        // $request->Ignition_system;   //ระบบจุดระเบิด
        // $request->Fuel_type;   //ประเภทน้ำมันเชื้อเพลิง
        // $request->Fuel_supply_system;   //ระบบจ่ายน้ำมันเชื้อเพลิง
        // $request->Fuel_tank_capacity;   //ความจุถังน้ำมันเชื้อเพลิง
        // $request->Suspension_system;   //ระบบกันสะเทือน
        // $request->Brake_system;   //ระบบเบรก        
        // $request->Tire_size;  //ขนาดยาง
        // $request->weight;   
        $SizeCar = $request->Size."x".$request->Size2."x".$request->Size3."มม.";
   //    print_r( $SizeCar);
      try {
        $id = DB::table('data')->insertGetId(
            [
            // 'Member_id' => nullable();
            'Data_name' => $request->data_name,
            'Data_engine_size' =>floatval($request ->Data_engine_size),
            'price' => $request ->price,
            'Data_using'=>$request->Data_using,   //ประเภทการใช้งาน
            'Data_image'=>str_replace("public","storage", $img),
            'Date_years' => intval($request ->Date_years),
            'show_type' => $request ->show_type,
            'Ignition_system' => $request ->Ignition_system,
            'Fuel_type' => $request ->Fuel_type,
            'Fuel_supply_system' =>  $request ->Fuel_supply_system,
            'Fuel_tank_capacity' =>  $request ->Fuel_tank_capacity,
            'Suspension_system' =>  $request ->Suspension_system,
            'Brake_system' =>  $request ->Brake_system,
            'Tire_size' =>  $request ->Tire_size,
            'Size' => $SizeCar,
            'weight' =>  $request ->weight,//น้ำหนัก (กก.)
            'age'=>$request->age,//ช่วงอายุการตัดสินใจ
            'sex'=>$request->sex, //เพศ
            'height'=>$request->heigh,//ความสูงของคน
            ]); 
            Alert::success('บันทึกสำเร็จ')->autoclose(2000);
            return redirect('showproduct/'.$id);
      } catch (\Throwable $th) {
        Alert::error('กรอกข้อมูลไม่ครบท้วน')->autoclose(2000);
        return view('/formAddCar');
      }
    }
    public function showproduct($id){
        
       $data = DB::select("select * from data where Data_id = :id ",['id' => ($id)]);     
        
        foreach($data as $title){
            $Data_id = $title->Data_id;
            $Data_name= $title->Data_name;
            $Data_engine_size= $title->Data_engine_size;
            $price= $title->price ;
            $Data_using= $title->Data_using;
            $Data_image= $title->Data_image;
            $Date_years= $title->Date_years;
            $show_type= $title->show_type;
            $Ignition_system = $title->Ignition_system;
            $Fuel_type= $title->Fuel_type;
            $Fuel_supply_system = $title->Fuel_supply_system;
            $Fuel_tank_capacity= $title->Fuel_tank_capacity;
            $Suspension_system= $title->Suspension_system;
            $Brake_system= $title->Brake_system;
            $Tire_size = $title->Tire_size;
            $Size= $title->Size;
            $weight = $title->weight;
        }    
        $Chack = DB::select('SELECT * FROM recommendation WHERE id_member =:id_m AND id_data = :id_d',['id_m'=>session()->get('user-login')->Member_id,'id_d'=>$id]);
        $arrlength = count($Chack);
        if($arrlength == 0){  // ถ้าเป็น 0 แสดงว่าไม่มีการบันทึก ให้สร้าง
            DB::table('recommendation')->insertGetId([
                'id_member'=>session()->get('user-login')->Member_id,
                'id_data'=>$id,
                'count'=>1
            ]);
        }else{

            foreach($Chack as $value){
               $Count = $value->count;
               $IDD = $value->id;
            }
            $update = DB::table('recommendation')
            ->where('id', $IDD)
            ->update(['count' => $Count+1]);

        }

       try {
                return view('showproduct',
                [
                 'Data_id'=>$Data_id,    
                'Data_name'=>$Data_name,
                'Data_engine_size'=>$Data_engine_size,
                'price'=>$price,
                'Data_using'=>$Data_using,
                'Data_image'=>$Data_image,
                'Date_years'=>$Date_years,
                'show_type'=>$show_type,
                'Ignition_system'=>$Ignition_system,
                'Fuel_type'=>$Fuel_type,
                'Fuel_supply_system'=>$Fuel_supply_system,
                'Fuel_tank_capacity'=>$Fuel_tank_capacity,
                'Suspension_system'=>$Suspension_system,
                'Brake_system'=>$Brake_system,
                'Tire_size'=>$Tire_size,
                'Size'=>$Size,
                'weight' =>$weight
        ]); 
       } catch (\Throwable $th) {
           //throw $th;
       }


}
    
    public function deleteCar(Request $request){
        
        try {
            DB::table('data')->where('Data_id', '>', $request->idd)->delete();
            Alert::success('ลบสำเร็จ')->autoclose(1000);
            return redirect('/');
            //code...
        } catch (\Throwable $th) {

           
            $data = DB::select("select * from data where Data_id = :id ",['id' => ($request->idd)]);     
        
            foreach($data as $title){
                $Data_id = $title->Data_id;
                $Data_name= $title->Data_name;
                $Data_engine_size= $title->Data_engine_size;
                $price= $title->price ;
                $Data_using= $title->Data_using;
                $Data_image= $title->Data_image;
                $Date_years= $title->Date_years;
                $show_type= $title->show_type;
                $Ignition_system = $title->Ignition_system;
                $Fuel_type= $title->Fuel_type;
                $Fuel_supply_system = $title->Fuel_supply_system;
                $Fuel_tank_capacity= $title->Fuel_tank_capacity;
                $Suspension_system= $title->Suspension_system;
                $Brake_system= $title->Brake_system;
                $Tire_size = $title->Tire_size;
                $Size= $title->Size;
                $weight = $title->weight;
            }    
            Alert::error('เกิดข้อผิดพลาด')->autoclose(1000);
                    return view('showproduct',
                    [
                     'Data_id'=>$Data_id,    
                    'Data_name'=>$Data_name,
                    'Data_engine_size'=>$Data_engine_size,
                    'price'=>$price,
                    'Data_using'=>$Data_using,
                    'Data_image'=>$Data_image,
                    'Date_years'=>$Date_years,
                    'show_type'=>$show_type,
                    'Ignition_system'=>$Ignition_system,
                    'Fuel_type'=>$Fuel_type,
                    'Fuel_supply_system'=>$Fuel_supply_system,
                    'Fuel_tank_capacity'=>$Fuel_tank_capacity,
                    'Suspension_system'=>$Suspension_system,
                    'Brake_system'=>$Brake_system,
                    'Tire_size'=>$Tire_size,
                    'Size'=>$Size,
                    'weight' =>$weight
            ]); 
        }

    }
}
