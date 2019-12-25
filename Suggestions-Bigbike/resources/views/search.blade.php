@extends('layouts.main')
@section('title','Welcom to ')
@section('content')
@include('sweetalert::alert')


<div class="container"  id="div-box">
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center">ค้นหาจักรยานยนต์บิ๊กใบ้ที่ต้องการให้แนะนำ</h1>
    <br>
    <form action=""  method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">

            <div class="col-sm-4">
           
                <label for="exampleFormControlSelect1">การใช้งาน*</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option value="ขับขี่ในเมือง">ขับขี่ในเมือง</option>
                    <option value="ขับขี่ในสนาม">ขับขี่ในสนาม</option>
                    <option value="เดินทางไกล">เดินทางไกล</option>
                </select>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">กรุณาป้อนชื่อผู้ใช้</div>
              </div>
        
              <div class="col-sm-4">
               
                <label for="exampleFormControlSelect1">อายุ*</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        @for ($i = 10; $i <90; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">กรุณาป้อนอายุ</div>
              </div>
              
              <div class="col-sm-4">
                <label for="exampleFormControlSelect1">สวนสูง*</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    @for ($i = 120; $i <200; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
              </div>
        </div>
          <br>
         <button id="btn-submit" class="btn btn-outline-primary btn-block" >ค้นหา</button>
         {{-- <button id="btn-submit" type="submit" class="btn btn-outline-primary btn-block" >เข้าสู่ระบบ</button> --}}

        </form>
</div>
<style>
#exampleFormControlSelect1{
    border-radius: 20px;
}
#div-box{
    margin-top: 10%;
    margin-bottom: 10%;
    box-shadow: 5px 5px 5px 5px #ccc;
    padding: 3% 5% 10% 5%;
}

</style>

@endsection