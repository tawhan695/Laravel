<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class FunctionAssess extends Controller
{   
    public function index(){

    }
    public function calAssess(Request $request){
        
     


        try {

            $sum =0;
           if($request->price_list){
            foreach( $request->price_list as $price){
             $sum += intval($price);
     
            }
        }
         if($request->filess){
            $base64 = $request->filess;

             $data =$request->filess;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);          
                  // image saved
            $toname = rand(10000,1000);
           
       Storage::disk('local')->put('public/'.strval($toname).'.png', $data);
         }
    
            $price_bike =intval($request->price_bike); //ราคารถ
            $years =intval($request->years);          //ปีรถ
           
            $lyears = intval(date('Y'));             //ปีปัจจุบัน
            $Syear =$lyears-$years; 
                            //ปีที่ดหลือของรถ
            if($Syear >=8){//ห้ามเกิน 8 ปี
             $Syear =8;
            }
            $f=0;
          for ($i = 8; $i >= 0 ; $i--){
              $f += $i;      
          }
         
          $y1= 8-$Syear;   //ปีที่เหลือ
        //   $p3=8-$y1;
          $p = $y1/$f;      //3/15 =0.02
          $per =((8-$y1)*10)/100;
        
         $p5 = number_format(floatval((($price_bike-($price_bike*$per))-(($p*$price_bike))+($sum+0))), 2); //ราคาที่ประเมิน\


                    $id = DB::table('access')->insertGetId(
            [
                'member_id' => session()->get('user-login')->Member_id,
                'picture' => strval($toname).'.png',
                 'years' => strval($years),
                 'accessories'=>  $request->ITEM,
                'appraised_price' => $p5,
    
             ]);
            return response()->json([
                                        'success'=>'ราคาประเมิน',
                                        'sum'=>$sum ,
                                        'file'=>$toname,
                                        'price_bike'=>$price_bike,
                                        '$years'=>$Syear,
                                        'f'=> $f,
                                        'ปีที่เหลือ'=>$y1,
                                        'p'=>$p,
                                         'p5'=>$p5,
                                         'ค่าเสื่อม'=>($p*$price_bike),
                                         'per'=>((8-$y1)*10)/100
                                         ]);
        } catch (\Throwable $th) {
            return response()->json(['success'=>'error']);
        }
      

    }
}
