@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')
     <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>เว็บไซต์ให้คำแนะนำ<br><span>การชื้อและประเมินราคา</span><br>บิ๊กไบต์มือสอง</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">รายการแนะนำสำหรับคุณ</a>
          {{-- <a href="#services" class="btn-services scrollto">Our Services</a> --}}
        </div>
      </div>
      

    </div>
  </section><!-- #intro -->

      <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>แนะนำ</h3>
          <p>รายการแนะรถจักรยานยนต์</p>
        </header>
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
        

      </div>
    </section><!-- #about -->
  
<style>
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
      
@endsection