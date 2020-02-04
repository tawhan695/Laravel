<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagersController extends Controller
{
    public function index(){
        // echo session()->get('user-login')->Member_id;
        try {
            //code...
            $sql =DB::select("SELECT * FROM recommendation INNER JOIN data on recommendation.id_data = data.Data_id WHERE id_member =:member ORDER BY recommendation.count DESC LIMIT 3",['member'=>session()->get('user-login')->Member_id]);
           
             if(count($sql) > 0){
               return view('index',['show_bike'=>$sql,'title'=>'รายการรถจักรยานยนต์ที่เข้าบ่อย'] );
            }else{
             $data = DB::select("SELECT * FROM `data` WHERE `show_type` = 'ทั่วไป' LIMIT 9"); 
             return view('index',['show_bike'=>$data,'title'=>'รายการแนะรถจักรยานยนต์ใหม่']);
            }
        } catch (\Throwable $th) {
            $data = DB::select("SELECT * FROM `data` WHERE `show_type` = 'ทั่วไป' LIMIT 9"); 
            return view('index',['show_bike'=>$data,'title'=>'รายการแนะรถจักรยานยนต์ใหม่']);
        }

    }
    public function recommend(){
        return view('recommend');
    }
    public function data_management(){
        $data = DB::select("SELECT * FROM `data` ORDER BY `data`.`Data_id` DESC"); 
        return view('data_management',['show_bike'=>$data,'title'=>'รถจักรยานยนต์ทั้งหมด']);
        // return view('data_management');
    }
    public function search(){
        return view('search');
    } public function profile(){
        $state_edit = FALSE;

        return view('profile')->with('state', $state_edit);
    } public function price_estimation(){
        if(session()->has('user-login')){
            $Data = DB::table('access')->where('member_id',session()->get('user-login')->Member_id)->get();
            try {
              //  print_r($Data);
                return view('price_estimation',['accessData'=>$Data]);
            } catch (\Throwable $th) {
                //   return view('price_chack');
               }
            }
       
    }
    public function formAddCar(){
        return view('formAddCar');
    }
    public function search_bike(Request $request){ //SELECT * FROM `data`WHERE `Data_name` LIKE 'kawasaki%' ใช้ในการค้นหา
        $success;
        $status;
        $data = DB::select("SELECT * FROM data WHERE Data_name LIKE :name",['name'=>$request->name.'%']); 
        if(count($data) < 1){
           $success = 'ไม่พบข้อมูล "'.$request->name.'"';
           $status = FALSE;
        }else{
            $success =$request->name;
            $status = TRUE;
        }
        // print_r($data);
        return view('search_bike',['show_bike'=>$data,'success'=>$success,'status'=>$status]);
      
    }

}