@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')
<br><br><br>

@foreach ($board_posts as $item)  
<div class="container mt-3">
   
    <div class="media border p-3">
      <img src="/{{$item->Web_board_imge}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
      <div class="media-body">
        <h2 class="text-primary">{{$item->Web_board_posts_name_post}}</h2>
        <p>{{$item->web_board_posts_name}}</p>
        <img src="/{{$item->Web_board_imge}}" alt="">
        <br><br>
        <p class="text-info">{{$item->Web_board_message}}</p>
        <p class="text-secondary ">โพสเมื่อ {{$item->massages_date}}  {{$item->massages_time}}</p><br>
        {{-- <hr>
        <div class="media p-3">
            <img src="https://www.w3schools.com/bootstrap4/img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
            <div class="media-body">
              <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>  --}}
    </div>  
    </div>
  </div>
  {{-- show comment --}}
  <div id="show_comment">

  </div>

  <script>
    $(document).ready(function(){

        var id ={{$item->web_board_posts_id}} ;
        $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{url('ShowComment')}}",
        data:{'id' : id},
        method:'POST',
        success: function( resp ) {
            arrData = (resp.success);
            console.log(arrData);
            arrData.forEach(element => {
            $('#show_comment').append(
        '<div class="container mt-3"> '+
        '<div class="border">' +     
        '<div class="media p-3">'+
        '<img src="https://www.w3schools.com/bootstrap4/img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">'+
        '<div class="media-body">'+
         ' <h4>'+element['Member_name']+' '+ element['Member_last_name']+' <small><i>ความคิดเห็นเมื่อ '+ element['Time']+'</i></small></h4>'+
         ' <p>'+element['text']+'</p>'+
       ' </div>'+
        '</div>'+ 
        '</div>'+ 
        '</div>'
            );
            });
                            
        },
        error: function( req, status, err ) {
            console.log( 'something went wrong', status, err );
        }
    });

   



        $("#Submit").click(function(){
          var id ={{$item->web_board_posts_id}} ;
          
        $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{url('addComment')}}",
        data:{'id' : id,'text':$("#comment").val()},
        method:'POST',
        success: function( resp ) {
            arrData = (resp.success);
            console.log(resp.in);
            arrData.forEach(element => {
            $(
                '<div class="container mt-3"> '+
        '<div class="border">' +     
        '<div class="media p-3">'+
        '<img src="https://www.w3schools.com/bootstrap4/img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">'+
        '<div class="media-body">'+
         ' <h4>'+element['Member_name']+' '+ element['Member_last_name']+' <small><i>ความคิดเห็นเมื่อ '+ element['Time']+'</i></small></h4>'+
         ' <p>'+element['text']+'</p>'+
       ' </div>'+
        '</div>'+ 
        '</div>'+ 
        '</div>'
            ).appendTo('#show_comment');
            });
                            
        },
        error: function( req, status, err ) {
            console.log( 'something went wrong', status, err );
        }
    });
    $("#comment").val('');
      });
  
    });
    </script>
  


  {{-- commemt --}}
      <div class="container mt-3"> 
        <div class="border">      
      <div class="media p-3">
        {{-- <img src="https://www.w3schools.com/bootstrap4/img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;"> --}}
        <div class="media-body">
            <div class="form-group">
                <label for="comment">แสดงความคิดเห็น :</label>
                <textarea placeholder="เขียนความคิดเห็น..." class="form-control" rows="5" id="comment"></textarea>
                <br>
                <button type="button" id="Submit" class="btn btn-info float-right" style="margin-right:3% ">แสดงความคิดเห็น</button>
                {{-- <input type="button" class="btn btn-info" >   --}}
            </div>
        </div>
      </div> 
      </div> 
      </div> 


  
  @endforeach

  <style>
  #comment{
    padding: 2%;
    margin: 2% 2% 0% 2%;
    width: 95%;
    height: 50%;
  }
  .border-radius{
    border-radius: 20px;
}
.berder-2{
    box-shadow: 5px 5px 5px 5px #ccc;
}
  </style>
@endsection