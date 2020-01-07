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
    <form>
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
                                    <label>{{ session()->get('user-login')->Member_titel}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">

                                <div class="col-4">
                                    <label>ชื่อ-นามสกุล</label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->Member_name}}
                                        {{ session()->get('user-login')->Member_last_name}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>วันเกิด<label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->Date_birth}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>อายุ<label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->Member_age}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>ส่วนสูง<label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->End_heiht}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>อีเมล<label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->Member_email}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-div">
                            <div class="col-12 row" style="margin:10px 0px 10px 0px">
                                <div class="col-4">
                                    <label>ชื่อผู้ใช้<label>
                                </div>
                                <div class="col-6">
                                    <label>{{ session()->get('user-login')->Member_username}}</label>
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
                                    <label>{{ session()->get('user-login')->Member_password}}</label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning edit radius20" style="float:right"
                                        id="edit">แก้ไข</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <button type="button" class="btn btn-info radius20" style="float:right"
                    id="editing">แก้ไขข้อมูลส่วนตัว</button>

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

.radius20 {
    border-radius: 20px;
}
</style>

<script>
$(document).ready(function() {

    var x = document.getElementById("test").querySelectorAll("#edit");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].hidden = true;
    }

    // document.getElementById("edit").hidden = true;
    $('#editing').click(function() {
        console.log(55555);
        var y = document.getElementById("test").querySelectorAll("#edit");
        var j;
        for (j = 0; j < y.length; j++) {
            y[j].hidden = false;
        }
        
        Swal.fire({
            title: 'Submit your Github username',
            input: 'text',
            inputValue: 'name',
            inputAttributes: {
                autocapitalize: 'off',
                // value: "555555",
            },
            showCancelButton: true,
            confirmButtonText: 'บันทึก',
            cancelButtonText: 'ยกเลิก',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                return fetch(`//api.github.com/users/${login}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText)
                        }
                        return response.json()
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            
            if (result.value) {
                Swal.fire({
                    title: `${result.value.login}'s avatar`,
                    imageUrl: result.value.avatar_url
                })
            }
        })




    });
});
</script>

@endsection