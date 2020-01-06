@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container" id="div-box">
    <br>
    <br>
    <h3 class="text-center">จัดการข้อมูลส่วนตัว</h3>
    <br>

    <center><img src="img/user-business512px.png" alt="" width="100px" height="100px"></center>

    <br>
    <form action="updateprofile" method="POST"  novalidate>
        @csrf
        <div class="form-group row">
            <div class="col-12">
                <h3 class="text-center">ยินดีต้อนรับคุณ สมดี มากเด้อ</h3>
            </div>
            <div class="col-12">
                <h6 class="root-text-color root-text-center">จัดการข้อมูลส่วนตัว</h6>
            </div>

            <div class="col-12">
                <div class="card">
                    <br>
                    <div class="container" id="test">
                        <h6 class="root-text-color">ข้อมูลส่วนบุคคล</h6>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                @if (session()->has('user-login'))
                                <div class="col-4">
                                    <label>คำนำหน้า</label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label name="title" id="title_name" >{{ session()->get('user-login')->Member_titel}}</label>
                                    </div>
                                    
                                    <div id="E">
                                    <select  name="title_name" class="browser-default custom-select custom-select-lg mb-3" >
                                        <option value="นาย">{{ session()->get('user-login')->Member_titel}}</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                      </select>
                                </div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20 " style="float:right"id="edit"  onclick=" edit()">แก้ไข</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">

                                <div class="col-4">
                                    <label>ชื่อ-นามสกุล</label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                          <label>{{ session()->get('user-login')->Member_name}}   {{ session()->get('user-login')->Member_last_name}}</label>
                                    </div>
                                   
                                        
                                    <div id="E"><input type="text" class="form-control " id="fname"  name="fname" value="{{ session()->get('user-login')->Member_name}}">
                                    <input type="text" class="form-control " id="Lname"  name="Lname" value=" {{ session()->get('user-login')->Member_last_name}}"></div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>วันเกิด<label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label>{{ session()->get('user-login')->Date_birth}}</label>
                                    </div>
                                    
                                    <div id="E"><input type="date" class="form-control" id="birth" placeholder="ป้อนวันเดือนปีเกิด" name="birth" value="{{ session()->get('user-login')->Date_birth}}"> </div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>อายุ<label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label>{{ session()->get('user-login')->Member_age}}</label>
                                    </div>
                                    <div id="E">
                                        <input type="number" class="form-control" id="age" placeholder="ป้อนอายุ" name="age" value="{{ session()->get('user-login')->Member_age}}" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>ส่วนสูง<label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label>{{ session()->get('user-login')->End_heiht}}</label>
                                    </div>
                                    
                                    <div id="E"><input type="number" class="form-control" id="heiht" placeholder="ป้อนส่วนสูง" name="heiht" value="{{ session()->get('user-login')->End_heiht}}"></div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>อีเมล<label>
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label>{{ session()->get('user-login')->Member_email}}</label>
                                    </div>
                                    
                                    <div id="E">
                                    <input type="email" class="form-control" id="email" placeholder="ป้อนอีเมล" name="email" value="{{ session()->get('user-login')->Member_email}}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>ชื่อผู้ใช้<label>
                                </div>
                                <div class="col-6">
                                    <label >{{ session()->get('user-login')->Member_username}}</label>
                                </div>
                                <div class="col-2">
                                    <!-- <button type="button" class="btn btn-warning edit radius20" style="float:right">แก้ไข</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>รหัสผ่าน<label>
                                
                                    
                                </div>
                                <div class="col-6">
                                    <div id="H">
                                        <label>*******</label>
                                    </div>
                                    <div id="E">
                                    <input type="password" class="form-control" id="pwd" placeholder="ป้อนรหัสผ่าน" name="pswd" value="{{ session()->get('user-login')->Member_password}}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    {{-- <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button> --}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <button type="button" class="btn btn-info radius20" style="float:right" id="editing">แก้ไขข้อมูลส่วนตัว</button>
                <button type="submit" class="btn btn-success radius20" style="float:right" id="save" hidden='true' >บันทึก</button>
                   
            </div>

        </div>
    </form>




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

h3.text-center {
    color: #004289;
}

.root-text-color {
    color: #004289;
}

.root-text-center {
    text-align: center;
}

.block-div {
    border-style: ridge;
    border-width: 1px 0px 0px 0px;
    /* margin-top: 5px; */
}

/* #edit {
    display: none;
} */
input{
    border-radius: 20px;
}
.radius20 {
    border-radius: 20px;
}
</style>

<script>
$(document).ready(function() {
    
    var x = document.getElementById("test").querySelectorAll("#E");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].hidden = true;
    }

    // document.getElementById("edit").hidden = true;
    $('#editing').click(function() {
        console.log(55555);
        var y = document.getElementById("test").querySelectorAll("#E");
        var j;
        for (j = 0; j < y.length; j++) {
            y[j].hidden = false;
        }

        //hidde
        var k = document.getElementById("test").querySelectorAll("#H");
        var l;
        for (l = 0; l < k.length; l++) {
            k[l].hidden = true;
        }
        document.getElementById("editing").hidden=true;
        document.getElementById("save").hidden=false;

       // document.getElementById("title_name").value={{ session()->get('user-login')->Member_titel}};

    });
});
    
</script>

@endsection