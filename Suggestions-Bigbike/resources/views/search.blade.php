@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')


<div class="container"  id="div-box">
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center">ค้นหาจักรยานยนต์บิ๊กใบ้ที่ต้องการให้แนะนำ</h1>
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
       }
    });
});
  
</script>
@endsection