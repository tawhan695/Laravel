@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container" id="div-box">
    <br>
    <h3 class="text-center">ประเมินราคาบิ๊กไบต์ของคุณ</h3>
    <br>
    <div class="">

        <form action="calAssess" method="post" novalidate>
            @csrf
            <hr>
            <label class="">ราคาบิ๊กไบต์ *</label>
            <div width="800px">
                <img id="blah" src="#" alt="your image" width="100%" style="display:none">
            </div>
            <br>
            <div class="text-center">
                <span class="btn btn-info btn-file radius20">
                    ค้นหารูป...<input type="file" id="imgInp" name="filename" accept="image/gif, image/jpeg, image/png">
                </span>
            </div>
            <hr>
            <label class="">ปีรถจักรยานยนต์บิ๊กไบค์ *</label>
            <select name="years" class="form-control radius20" id="exampleFormControlSelect1">
                @for ($i = 1000; $i <=2020; $i++) <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
            <hr>
            <label class="">ของตกแต่งรถจักรยานยนต์บิ๊กไบค์ *</label>
            <div class="container" id="items" name="items">

            </div>

            <!-- <table class="table-responsive" width="100%" id="datatable" name="datatable">
                <thead style="display:none;">
                    <tr>
                        <th>สินค้า</th>
                        <th>ราคา</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table> -->


            <div class="row">
                <div class="col-sm-4">
                    <select class="form-control radius20" id="Select2" name="iteM"></select>
                </div>
                <div class="col-sm-4">
                    <input type="number" class="radius20 form-control" placeholder="ราคา" id="price" name="price"
                        width="" height="" required>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-outline-info btn-block radius20  " type="button"
                        onclick="addItems()">เพิ่ม</button>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-info btn-block radius20">ประเมินราคา</button>
        </form>
    </div>

</div>
<style>
#exampleFormControlSelect1 {
    border-radius: 20px;
}

#div-box {
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

.radius20 {
    border-radius: 20px;
}

.block-div {
    border-style: ridge;
    border-width: 1px 0px 0px 0px;
    /* margin-top: 5px; */
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
var array = ["กันสะบัด", "เกียร์โยง", "ท้ายสั้น", "ท่อไอเสีย", "ปั๊มเบรค", "สวิงอาร์ม", "โช๊ค", "เบาะ", "กันล้ม",
    "แฮนด์"
];
array.forEach(element => {

    console.log(element);
    $('#Select2').append('<option id ="' + element + '">' + element + '</option>');
});
var number = 0;
var arrayItem = [];
var arrayPrice = [];

function addItems() {
    var item = document.getElementById('Select2').value;
    var price = document.getElementById('price').value;
    number = number + 1;
    // $('#items').append(
    //     '<div class="alert alert-success alert-dismissible"><button type="button" class="btn btn-danger radius20" data-dismiss="alert" style="float:right; margin-top:-1%;"> ลบ </button><strong>' +
    //     item + '</strong> ราคา ' + price + ' บาท 1X </div>');

    $('#items').append('<div class="block-div" id="cardID' + number + '">' +
        '<div class="col-12 row" style="margin:10px 0px 10px 0px">' + '<div class="col-6">' + item +
        '<input type="hidden" name="hidden_item" id="item' + number + '" value="' + item + '" />' + '</div>' +
        '<div class="col-4">' + price + '<input type="hidden" name="hidden_price" id="price' + number +
        '" value="' + price + '" />' + '</div>' + '<div class="col-2">' +
        '<button type="button" name="remove_details" class="btn btn-danger btn-block radius20 remove_details" style="float:right" id="' +
        number + '"> ลบ </button>' + '</div></div></div>');

    arrayItem.push(item);
    arrayPrice.push(price);

    console.log(arrayItem);
    console.log(arrayPrice);
    // $('#Select2').append('<option id ="' + item + '">' + element + '</option>');

    document.getElementById('Select2').value = " ";
    document.getElementById('price').value = " ";

}

$(document).on('click', '.remove_details', function() {
    var row_idec = $(this).attr("id");
    // console.log(row_idec)



    Swal.fire({
        title: 'คุณต้องการลบหรือไม่!',
        text: '',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'ยกเลิก',
        confirmButtonText: 'ตกลง'
    }).then((result) => {
        if (result.value) {
            var del = document.getElementById('cardID' + row_idec);
            del.remove();
            Swal.fire({
                position: 'top-centor',
                icon: 'success',
                title: 'ลบเรียบร้อย!',
                showConfirmButton: false,
                timer: 1000
            })
            $('#ecrow_' + row_idec + '').remove();
        }
    })
});

$(".btn-submit").click(function(e) {
    e.preventDefault();
    var items = document.getElementById('items').value;
    var price = document.getElementById('price').value;
    $.ajax({
        type: 'POST',
        url: 'FunctionAssess',
        data: {
            items: arrayItem,
            price: arrayPrice
        },
        success: function(data) {
            console(data);
        }
    });

});
</script>
@endsection