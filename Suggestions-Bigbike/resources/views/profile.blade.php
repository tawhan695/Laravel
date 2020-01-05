@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container"  id="div-box">
    <br>
    <br>
    <h1 class="text-center">จัดการข้อมูลส่วนตัว</h1>
    <br>
    
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