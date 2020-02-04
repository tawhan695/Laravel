@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container" id="div-box">
    <br>
    <h3 class="text-center">จัดการข้อมูลรถจักรยานยนต์</h3>
    <br>
    <div class="col-12">
        <h6 class="root-text-color root-text-center">ข้อมูลสินค้า</h6>
        {{--เพิ่มรถจักรยานยนต์ --}}
        {{--  --}}
        <a href="/formAddCar" ><button type="button" class="btn btn-primary btn-lg radius20">เพิ่มรถจักรยานยนต์ <span class="badge">+</span></button></a>
        <br>
    </div>
    <br>
    <div class="card-columns">
        @foreach ($show_bike as $item)
          <div class="card card-1">
            <img class="card-img-top" src="{{$item->Data_image}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">{{$item->Data_name}}</h4>
              {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> --}}
              <a href="showproduct/{{$item->Data_id}}" class="btn btn-info stretched-link radius20">ดูรายละเอียด</a>
            </div>
          </div>
        @endforeach
      </div>
    <br>
     
</div>
<style>
#Date_years {
    border-radius: 20px;
}

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

.btn-file {
    position: relative;
    overflow: hidden;
}

.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>

@endsection