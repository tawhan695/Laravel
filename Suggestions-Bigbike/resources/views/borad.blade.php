@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')
  
<div>
    <br><br><br>
    <div class="container" id="div-box">
        <div class="head_box">
            <div class="body_box text-senter row">
                 <img src="/storage/icons8_chat_128px.png" alt="" width="5%">
                 <label onclick="AddPost()" class="text-wite">ตั้งกระทู้</label>
            </div>
        </div>
        {{-- add post --}}
         <div class="container_post shadow" id="container_post"> 
            <form method="POST" action="/addPost" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="title">หัวข้อ:</label>
                <input type="text" class="form-control form-control border-radius" name="title">
                </div>
                <div class="form-group">
                    <label for="img_post">เพิ่มรูปภาพ:</label><br>
                    <div >
                        <img id="blah" src="#" name="bike" alt="your image" width="100%" style="display:none">
                    </div>
                    <input type="file" id="imgInp" name="img_car" accept="image/gif, image/jpeg, image/png">   
                    
                </div>
                <div class="form-group">
                  <label for="comment">เขียนรายละเอียดของคำถาม:</label>
                  <textarea class="form-control border-radius" rows="5" id="comment" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary border-radius">โพส</button>
                <button type="button" onclick="CanclosePost()" class="btn btn-danger border-radius">ยกเลิก</button>
              </form>
              
         </div>
         {{-- <img src="{{url('storage/bab7yRaiPSW6TvBZKrxXfVk9e8v8jesH9DyEJeHl.png')}}" alt=""> --}}

         @foreach ($board_posts as $item)
         <div class="post_list "> {{-- กะทู้ --}}
             <a href=" /view_post/{{$item->web_board_posts_id}}">
             <div class="media border p-3 shadow">

                    <img src="{{$item->Web_board_imge}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20%;">
                    <div class="media-body">
                      <h4>{{$item->Web_board_posts_name_post}}<small><br><i>{{$item->massages_date}}  {{$item->massages_time}}</i></small></h4>
                      <p>{{$item->web_board_posts_name}}</p>
                      
                    </div>
                    {{-- <button class="btn btn-dark" type="button">ลบ</button> --}}
                </div>
                {{-- <a href="/" class="222"></a> --}}
            </a>
             </div>
         @endforeach
    </div>
</div>
<script>
    $("#container_post").hide();
function AddPost(){
    $("#container_post").show();
}
function CanclosePost(){
    $("#container_post").hide();
}

var reader = new FileReader();
function readURL(input) {
    if (input.files && input.files[0]) {
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
</script>
<style>
.post_list{
     padding: 1% 10% 1% 10%; */
    /* margin: 1% 1% -20% 1%; */
}

 /* comment    */
.media .avatar {
    width: 64px;
}
.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
/* .body_box,img{
    width: 25%;
} */
.container_post{
   padding: 2% 20% 2% 2%;
   margin: 2%;
}
ิ.box_shado{
    box-shadow: 5px 5px 5px 5px #ccc;
}
.text-wite{
   color: #FFFFFF;
   padding-top: 2%;
   padding-left: 2%;
}
..text-wite:hover{
    color: #FFFFFF; 
}
.head_box{
    background-color:#00428A;
    width:100%;
    height: 10%;
    padding: 10px 30px 10px 30px;
}
.border-radius{
    border-radius: 20px;
}
#div-box{
    margin-top: 1%;
    margin-bottom: 5%;
    box-shadow: 5px 5px 5px 5px #ccc;
    padding: 0% 0% 5% 0%;
}
.shadow{
    box-shadow: 5px 5px 5px 5px #ccc;
}
</style>
@endsection