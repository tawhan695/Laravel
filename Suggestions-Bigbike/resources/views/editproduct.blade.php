@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')


        @if (session()->has('admin-login'))
            
      
            <form action="/editbike" method="post">
                @csrf
                <div class="container" id="div-box">
                    <br>
                    <h3 class="text-center">ข้อมูลสินค้า</h3>
                    <br>
                    {{-- <div class="col-12">
                        <h6 class="root-text-color root-text-center">รายละเอียดของรถ</h6>
                    </div> --}}
                    <div class="card">
                        <div class="container">
                            <br>
                            <h6 class="root-text-color">รายละเอียดของรถ</h6>
                            <br>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-4">
                                        {{-- <label>รูปภาพ</label> --}}
                                    </div>
                                    <div class="col-4">
                                        <div width="300px">
                                            <center>
                                            <img id="blah" src="http://127.0.0.1:8000/{{$Data_image}}" width="100%">
                                            </center>
                                        </div>
                                        {{-- <label>:</label> --}}
                                    </div>
                                    <div class="col-4">
                           
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>รหัสสินค้า</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                       
                                        <input class="form-control" type="text" name="Data_id" value="{{$Data_id}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ชื่อสินค้า</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                       
                                        <input class="form-control" type="text" name="Data_name" value="{{$Data_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ขนาดเครื่องยนต์</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Data_engine_size" value="{{$Data_engine_size}}">
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ราคา</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="text" name="price" value="{{$price}}">
                                   
                                    </div>
                                    <div class="col-1">
                                        <label>บาท</label>
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ประเภทการใช้งาน</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Data_using" value="{{$Data_using}}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ปีที่ผลิต</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Date_years" value="{{$Date_years}}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ระบบจุดระเบิด</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Ignition_system" value="{{$Ignition_system}}">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ประเภทน้ำมันเชื้อเพลิง</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Fuel_type" value="{{$Fuel_type}}">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ระบบจ่ายน้ำมันเชื้อเพลิง</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Fuel_supply_system" value="{{$Fuel_supply_system}}">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ความจุถังน้ำมันเชื้อเพลิง</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="text" name="Fuel_tank_capacity" value="{{$Fuel_tank_capacity}}">
                                        
                                    </div>
                                    <div class="col-1">
                                        <label>ลิตร</label>
                                    </div>
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ระบบกันสะเทือน</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Suspension_system" value="{{$Suspension_system}}">
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ระบบเบรก</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Brake_system" value="{{$Data_name}}">
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ขนาดยาง</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="Tire_size" value="{{$Tire_size}}">
                                      
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>ขนาด (ยาวxกว้างxสูง มม.)</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="text" name="Size" value="{{$Size}}">
                                       
                                    </div>
                                    <div class="col-1">
                                        <label>มม.</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="block-div">
                                <div class="col-12 row" style="margin:10px 0px 10px 0px">
                
                                    <div class="col-3">
                                        <label>น้ำหนัก (กก.)</label>
                                    </div>
                                    <div class="col-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="number" name="weight" value="{{$weight}}">
                                       
                                    </div>
                                    <div class="col-1">
                                        <label>กิโลกรัม</label>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning radius20">บันทึกแก้ไข</button>
                    </div>
                         <br>
                        </div>
            </form>
          
           
          
  
        @endif
  <script>
          $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        $.ajax({
            type:'POST',
            url:"{{url('/deleteCar')}}",
            data:{
                type:type,
                age:age,
                hight:hight
            },
       success:function(data){
            arrData = data.success;
   
       }
    });
  </script>
<style>
#div-box {
    margin-top: 10%;
    margin-bottom: 10%;
    box-shadow: 5px 5px 5px 5px #ccc;
    padding: 3% 5% 10% 5%;
}

.radius20 {
    border-radius: 20px;
}

.block-div {
    border-style: ridge;
    border-width: 1px 0px 0px 0px;
    /* margin-top: 5px; */
}

.root-text-color {
    color: #004289;
}

.root-text-center {
    text-align: center;
}

h3.text-center {
    color: #004289;
}

.blah {
    
}                              


</style>

@endsection