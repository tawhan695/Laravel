@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container"  id="div-box">
    <br>
    <h3 class="text-center">ประเมินราคาบิ๊กไบต์ของคุณ</h3>
    <br>
    <div class="">
        
        <form action="">
           
           <hr>
           <label class="">ราคาบิ๊กไบต์ *</label>
            <div  width="800px">
                <img id="blah" src="#" alt="your image" width="100%" style="display:none">               
            </div>
            <br>
            <div class="text-center">
                <span class="btn btn-info btn-file radius20">
                    ค้นหารูป...<input type="file"id="imgInp" name="filename" accept="image/gif, image/jpeg, image/png">
                </span>
            </div>
           <hr>
           <label class="">ปีรถจักรยานยนต์บิ๊กไบค์ *</label>
           <select class="form-control radius20" id="exampleFormControlSelect1">
            @for ($i = 1000; $i <=2020; $i++)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
           <hr>
           <label class="">ของตกแต่งรถจักรยานยนต์บิ๊กไบค์ *</label>
           <div class="item" id="items">

            </div>

           <div class="row">
            <div class="col-sm-4">
                <select class="form-control radius20" id="Select2" name="iteM"></select>
            </div>
            <div class="col-sm-4">
                <input type="number" class="radius20 form-control" placeholder="ราคา" id="price" required>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-outline-info btn-block radius20  " type="button" onclick="addItems()">เพิ่ม</button>
            </div>
           </div>
           <hr>
        </form>
    </div>
    
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
.radius20{
    border-radius: 20px;
}
</style>
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    document.getElementById('blah').style.display = "block";
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
              var array =["กันสะบัด","เกียร์โยง","ท้ายสั้น","ท่อไอเสีย","ปั๊มเบรค","สวิงอาร์ม","โช๊ค","เบาะ","กันล้ม","แฮนด์"];
              array.forEach(element => {
                  
                    console.log(element);
                    $('#Select2').append('<option id ="'+element+'">'+element+'</option>');
              });

function addItems(){
  var item =  document.getElementById('Select2').value;
  var price =  document.getElementById('price').value;
$('#items').append('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>'+item+'</strong> ราคา '+price+' บาท 1X </div>');
  $('#Select2').append('<option id ="'+element+'">'+element+'</option>');

  document.getElementById('Select2').value="";
  document.getElementById('price').value="0";

}
</script>
@endsection