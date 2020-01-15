{{-- @extends('layouts.main') --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Favicons -->
  <link href="http://127.0.0.1:8000/img/favicon.png" rel="icon">
  <link href="http://127.0.0.1:8000/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="http://127.0.0.1:8000/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="http://127.0.0.1:8000/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/lib/animate/animate.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="/" class="scrollto"><img src="http://127.0.0.1:8000/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">หน้าหลัก</a></li>
          <li><a href="/search">ค้าหารถจักรยานยนต์</a></li>
          <li><a href="/price_estimation">ประเมินราคารถจักรยานยนต์</a></li>
          <li><a href="">เว็บบอร์ด</a></li>
          {{-- <li><a href="">Team</a></li> --}}
          @include('sweetalert::alert')
          @if (session()->has('user-login'))
          <li class="drop-down"><a href="profile">{{ session()->get('user-login')->Member_name}}  {{ session()->get('user-login')->Member_last_name}}</a>
            <ul>
              <li><div class="text-center"><img src="http://127.0.0.1:8000/img/icons8_male_user_50px.png" alt=""></div></li>
              <li><a href="profile"  class="text-center" ><h4>{{ session()->get('user-login')->Member_name}}  {{ session()->get('user-login')->Member_last_name}}</h4></a></li>
              <li><div class="text-center" >{{ session()->get('user-login')->Member_email}}</div></li>
              <li><a href="profile">จัดการโปรไฟล์</a></li>
              <li></li>
              <li><a href="logout" style="color:brown">ออกจากระบบ</a></li>
            </ul>
          </li> 
          @elseif (session()->has('admin-login'))
            <li class="drop-down"><a href="">{{ session()->get('admin-login')->Admin_name}} </a>
              <ul>
                <li><div class="text-center"><img src="http://127.0.0.1:8000/img/icons8_male_user_50px.png" alt=""></div></li>
                <li><a href="profile"  class="text-center" ><h4>{{ session()->get('admin-login')->Admin_name}} </h4></a></li>
                <li><div class="text-center" >{{ session()->get('admin-login')->Admin_email}}</div></li>
                <li><a href="profile">จัดการโปรไฟล์</a></li>
                <li></li>
                <li><a href="logout" style="color:brown">ออกจากระบบ</a></li>
              </ul>
            </li> 
          @else
              <li><a href="#contact" data-toggle="modal" data-target="#Modal-regiter">สมัครสมาชิก</a></li>
              <li><a href="#contact" data-toggle="modal" data-target="#Modal-login">ลงชื่อเข้าใช้</a></li>
              @extends('layouts.modal.login')
              @extends('layouts.modal.regiter')
          @endif
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>

  </header><!-- #header -->

     @yield('content');
     {{-- @include('footer'); --}}
     @include('layouts.footer')


  </main>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="http://127.0.0.1:8000/lib/jquery/jquery.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/jquery/jquery-migrate.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/easing/easing.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/mobile-nav/mobile-nav.js"></script>
  <script src="http://127.0.0.1:8000/lib/wow/wow.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/waypoints/waypoints.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/counterup/counterup.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="http://127.0.0.1:8000/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="http://127.0.0.1:8000/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="http://127.0.0.1:8000/js/main.js"></script>
  {{-- @if (session('Member_name'))
  <div class="alert alert-success">
      {{ session('Member_name') }}
  </div>
@endif --}}
</body>
</html>
