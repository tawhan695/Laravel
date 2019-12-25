@extends('layouts.main')
@section('title','Welcom to ')
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
        <h2>เว็บไซต์ให้คำแนะนำ<br><span>กสารชื้อและประเมินราคา</span><br>บิ๊กไบต์มือสอง</h2>
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
          <div class="card" style="width:400px">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary stretched-link">See Profile</a>
            </div>
          </div>

          <div class="card" style="width:400px">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary stretched-link">See Profile</a>
            </div>
          </div>

          <div class="card" style="width:400px">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary stretched-link">See Profile</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary stretched-link">See Profile</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary stretched-link">See Profile</a>
            </div>
          </div>

        </div>
        

      </div>
    </section><!-- #about -->
  {{-- <div class="container">
     {{-- แนะนำรถ --}}

     <div style="background-color:crimson">
    
      <div class="row">
        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">App 1</a></h4>
              <p>App</p>
              <div>
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">App 1</a></h4>
              <p>App</p>
              <div>
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 1</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div> --}}

  <main id="main">
      
@endsection