<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagersController extends Controller
{
    public function index(){
        $data = DB::select("SELECT * FROM `data` WHERE `show_type` = 'ทั่วไป' LIMIT 9"); 
        return view('index',['show_bike'=>$data]);
    }
    public function recommend(){
        return view('recommend');
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
    // public function AddCar(Request $request){
        
    //     print_r($request->all());

    //     $request->Size;  //ขนาด (ยาว
    //     $request->Size2;  //ขนาด (กว้าง
    //     $request->Size3;  //ขนาด xสูง มม.)


       
    // }

}