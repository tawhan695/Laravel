@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')


<div class="container"  id="div-box">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
    </div>
    <div class="container">
        <form action="/search_bike" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control searchbar" placeholder="ค้าหา.." name="name">
                <div class="input-group-append">
                    <input class="btn btn-secondary searchbar2 fa fa-search" type="submit" value="ค้าหา">
                    {{-- <i class=""></i> --}}
                    
                </div>
            </div>
        </form>
        <br>
        @if ($status == FALSE )
        <h5>ผลลัพธ์การค้นหา {{$success}}</h5>
        @else
        <h5>ผลลัพธ์การค้นหา {{$success}}</h5>
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
        @endif
</div>
</div>


<style>
.border-radius{
    border-radius: 20px;
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
.searchbar{

border-radius: 20px 0px 0px 20px; 

}
.searchbar2{

border-radius: 0px 20px 20px 0px; 

}

</style>
@endsection