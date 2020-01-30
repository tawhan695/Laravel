@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

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
                        <label>ชื่อสินค้า</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>{{$Data_name}}</label>
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
                    <label>{{$Data_engine_size}}</label>
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
                    <label>{{$price}}</label>
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
                        <label>{{$Data_using}}</label>
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
                        <label>{{$Date_years}}</label>
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
                    <label>{{$Ignition_system}}</label>
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
                    <label>{{$Fuel_type}}</label>
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
                        <label>{{$Fuel_supply_system}}</label>
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
                        <label>{{$Fuel_tank_capacity}}</label>
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
                        <label>{{$Suspension_system}}</label>
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
                        <label>{{$Brake_system}}</label>
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
                        <label>{{$Tire_size}}</label>
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
                        <label>{{$Size}}</label>
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
                        <label>{{$weight}}</label>
                    </div>
                    <div class="col-1">
                        <label>กิโลกรัม</label>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
         <br>
         @if (session()->has('admin-login'))
             
         <div class="float-right">
             <button type="reset" class="btn btn-warning radius20">แก้ไข</button>
             <form action="/deleteCar" method="post">
               @csrf
                <input type="text" name="idd" hidden value="{{$Data_id}}" >
                <button type="submit" class="btn btn-danger radius20" >ลบข้อมูล</button>
             </form>
           
         </div>
         @endif
</div>
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