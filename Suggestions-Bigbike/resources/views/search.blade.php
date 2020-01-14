@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')


<div class="container"  id="div-box">
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center">ค้นหาจักรยานยนต์บิ๊กใบค์ที่ต้องการให้แนะนำ</h1>
    <br>
    <form  class="needs-validation">
 
        <div class="row">

            <div class="col-sm-4">
           
                <label for="exampleFormControlSelect1">การใช้งาน*</label>
                <select class="form-control border-radius" id="type">
                    <option value="ขับขี่ในเมือง">ขับขี่ในเมือง</option>
                    <option value="ขับขี่ในสนาม">ขับขี่ในสนาม</option>
                    <option value="เดินทางไกล">เดินทางไกล</option>
                    {{-- <option disabled hidden selected value>เลือกประเภทการใช้งาน*</option> --}}
                </select>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">กรุณาป้อนชื่อผู้ใช้</div>
              </div>
        
              <div class="col-sm-4">
               
                <label for="exampleFormControlSelect1">อายุ*</label>
                    <select  required class="form-control border-radius" id="age">
                        @for ($i = 10; $i <90; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        <option disabled hidden selected value="{{ session()->get('user-login')->Member_age}}">{{ session()->get('user-login')->Member_age}}</option>
                        @endfor
                    </select>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">กรุณาป้อนอายุ</div>
              </div>
              
              <div class="col-sm-4">
                <label >สวนสูง*</label>
                <select class="form-control border-radius" id="hight">
                    @for ($i = 120; $i <200; $i++)
                    <option disabled hidden selected value="{{ session()->get('user-login')->End_heiht}}">{{ session()->get('user-login')->End_heiht}}</option>
                    <option value="{{$i}}">{{$i}}</option>
                    
                    @endfor
                </select>
              </div>
        </div>
          <br>
         <button type="button" id="submit2" class="btn btn-outline-primary btn-block" >ค้นหา</button>
         {{-- <button id="btn-submit" type="submit" class="btn btn-outline-primary btn-block" >เข้าสู่ระบบ</button> --}}

        </form>
</div>
<div class="container">
    <div class="box-shadow">
        <div class="card-columns" id="card-show">

        </div>
    </div>
</div>
<style>
.border-radius{
    border-radius: 20px;
}
#div-box{
    margin-top: 10%;
    margin-bottom: 5%;
    box-shadow: 5px 5px 5px 5px #ccc;
    padding: 3% 5% 10% 5%;
}
.box-shadow{
    box-shadow: 5px 5px 5px 5px #ccc;
}

.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: auto;
  margin: 1rem;
  position: relative;
  width: auto;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.radius20 {
    border-radius: 20px;
}

</style>
    <script>
            $("#submit2").click(function(e) {
                e.preventDefault();
                var type =document.getElementById('type').value;
                var age =document.getElementById('age').value;
                var hight =document.getElementById('hight').value;
                    console.log(type);
                    console.log(age);
                    console.log(hight);
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        $.ajax({
            type:'POST',
            url:"{{url('searchdata')}}",
            data:{
                type:type,
                age:age,
                hight:hight
            },
       success:function(data){
            console.log(data);
            var Data_id = data.success[0].Data_id;
            var Data_name = data.success[0].Data_name;
            console.log(Data_name);
            var i;
            for (i = 0; i < 3; i++) {
                $('#card-show').append('<div class="card card-1">' + 
                '<img class="card-img-top" src="img/user-business512px.png" alt="Card image" style="width:100%">' + 
                '<div class="card-body">' + '<h4 class="card-title">' + data.success[0].Data_name + '</h4>' + 
                '<a href="showproduct" class="btn btn-info stretched-link radius20">ดูรายละเอียด</a>' + '</div></div>')
            }
       }
    });
});
  
</script>
@endsection