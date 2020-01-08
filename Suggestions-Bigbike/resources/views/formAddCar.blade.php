@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container" id="div-box">
    <br>
    <h3 class="text-center">เพิ่มสินค้า</h3>
    <br>
    <div class="col-12">
        <h6 class="root-text-color root-text-center">จัดการเพิ่มข้อมูลสินค้า</h6>
    </div>
    <br>
    <form action="insertcar" method="post" ecctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <br>
                    <h6 class="root-text-color">กรอกรายละเอียด</h6>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ชื่อสินค้า</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="data_name" id="data_name" class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ขนาดเครื่องยนต์</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Data_engine_size" id="Data_engine_size"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ราคา</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="number" name="price" id="price" class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ประเภทการใช้งาน</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="Data_using" class="form-control radius20" id="Data_using">
                                    <option value="" disabled selected hidden>เลือกประเภทการใช้งาน</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>เพิ่มรูป</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <span class="btn btn-info btn-file radius20">
                                    เพิ่มรูป...<input type="file" id="imgInp" name="imgInp"
                                        accept="image/gif, image/jpeg, image/png">
                                </span>
                                <div width="300px">
                                    <img id="blah" src="#" name="bike" alt="your image" width="100%"
                                        style="display:none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ปีที่ผลิต</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="Date_years" class="form-control radius20" id="Date_years">
                                    <option value="" disabled selected hidden>เลือกปีที่ผลิต</option>
                                    @for ($i = 1000; $i <=2020; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ประเภท</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="show_type" class="form-control radius20" id="show_type">
                                    <option value="" disabled selected hidden>เลือกประเภท</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ระบบจุดระเบิด</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Ignition_system" id="Ignition_system"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ประเภทน้ำมันเชื้อเพลิง</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Fuel_type" id="Fuel_type" class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ระบบจ่ายน้ำมันเชื้อเพลิง</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Fuel_supply_system" id="Fuel_supply_system"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ความจุถังน้ำมันเชื้อเพลิง</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="number" name="Fuel_tank_capacity" id="Fuel_tank_capacity"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ระบบกันสะเทือน</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Suspension_system" id="Suspension_system"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ระบบเบรก</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Brake_system" id="Brake_system"
                                    class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ขนาดยาง</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="Tire_size" id="Tire_size" class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ขนาด (ยาวxกว้างxสูง มม.)</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" name="Size" id="Size" class="form-control radius20"
                                    placeholder="ยาว" />
                            </div>
                            <div class="col-2">
                                <input type="number" name="Size2" id="Size2" class="form-control radius20"
                                    placeholder="กว้าง" />
                            </div>
                            <div class="col-2">
                                <input type="number" name="Size3" id="Size3" class="form-control radius20"
                                    placeholder="สูง" />
                            </div>
                            <!-- <div class="col-1">
                            <label>มม.</label>
                        </div> -->
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>น้ำหนัก (กก.)</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <input type="number" name="weight" id="weight" class="form-control radius20" />
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ช่วงอายุการตัดสินใจ</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="age" class="form-control radius20" id="age">
                                    <option value="" disabled selected hidden>เลือกช่วงอายุ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>เพศ</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="sex" class="form-control radius20" id="sex">
                                    <option value="" disabled selected hidden>เลือกเพศ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-div">
                        <div class="col-12 row" style="margin:10px 0px 10px 0px">

                            <div class="col-4">
                                <label>ความสูงของคน</label>
                            </div>
                            <div class="col-1">
                                <label>:</label>
                            </div>
                            <div class="col-7">
                                <select name="heigh" class="form-control radius20" id="heigh">
                                    <option value="" disabled selected hidden>เลือกความสูง</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-outline-info btn-block radius20">เพิ่มสินค้า</button>
                    <br>

                </div>
            </div>
        </div>
    </form>
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
<script>
$("#imgInp").change(function() {
    readURL(this);
});
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
var array = ["ขับขี่ในเมือง", "ขับขี่ในสนาม", "เดินทางไกล"];

array.forEach(element => {

    console.log(element);
    $('#Data_using').append('<option id ="' + element + '">' + element + '</option>');
});
var array2 = ["แนะนำ", "ทั่วไป"];

array2.forEach(element2 => {

    console.log(element2);
    $('#show_type').append('<option id ="' + element2 + '">' + element2 + '</option>');
});
var arraySex = ["ชาย", "หญิง"];

arraySex.forEach(element3 => {

    console.log(element3);
    $('#sex').append('<option id ="' + element3 + '">' + element3 + '</option>');
});
var arrayAge = ["19-20", "21-40", "41-60"];

arrayAge.forEach(element4 => {

    console.log(element4);
    $('#age').append('<option id ="' + element4 + '">' + element4 + '</option>');
});
var arrayHeigh = ["160-169", "170-179", "มากกว่า 180"];

arrayHeigh.forEach(element5 => {

    console.log(element5);
    $('#heigh').append('<option id ="' + element5 + '">' + element5 + '</option>');
});
</script>
@endsection