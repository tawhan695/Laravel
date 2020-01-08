@extends('layouts.main')
@section('title','เว็บไซต์ให้คำแนะนำการชื้อและประเมินราคาบิ๊กไบต์มือสอง')
@section('content')
@include('sweetalert::alert')

<div class="container" id="div-box">
    <br>
    <h3 class="text-center">ข้อมูลสินค้า</h3>
    <br>
    {{-- <div class="col-12">
        <h6 class="root-text-color root-text-center">รายละเอียดของรถ</h6>
    </div> --}}
    <div class="card">
        <div class="container">
            <br>
            <h6 class="root-text-color">รายละเอียดของรถ</h6>
            <br>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-4">
                        {{-- <label>รูปภาพ</label> --}}
                    </div>
                    <div class="col-4">
                        <div width="300px">
                            <center>
                            <img id="blah" src="img/user-business512px.png" width="100%">
                            </center>
                        </div>
                        {{-- <label>:</label> --}}
                    </div>
                    <div class="col-4">
           
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ชื่อสินค้า</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>kawasaki z400</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ขนาดเครื่องยนต์</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>400</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ราคา</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-7">
                        <label>186,000</label>
                    </div>
                    <div class="col-1">
                        <label>บาท</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ประเภทการใช้งาน</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>ขับขี่ในเมือง</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ปีที่ผลิต</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>2019</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ประเภท</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>แนะนำ</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ระบบจุดระเบิด</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>Battery and Coil</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ประเภทน้ำมันเชื้อเพลิง</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>แก๊สโซฮอล์ 95 (E10), เบนซิน 95</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ระบบจ่ายน้ำมันเชื้อเพลิง</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>หัวฉีด</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ความจุถังน้ำมันเชื้อเพลิง</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-7">
                        <label>14</label>
                    </div>
                    <div class="col-1">
                        <label>ลิตร</label>
                    </div>
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ระบบกันสะเทือน</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>ล้อหน้า เทเลสโคปิค ขนาด 41 มม., ล้อหลัง Bottom-Link Uni-Trak, gas-charged shock with adjustable preload</label>
                    </div>
                    
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ระบบเบรก</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>ล้อหน้า ดิสก์เบรก (ดิสก์เบรกขนาด 310 มม. คาลิปเปอร์ลูกสูบคู่ พร้อมระบบ ABS), ล้อหลัง ดิสก์เบรก (ดิสก์เบรกขนาด 220 มม.ดิสก์เบรกขนาด 220 มม. คาลิปเปอร์ลูกสูบคู่ พร้อมระบบ ABS)</label>
                    </div>
                    
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ขนาดยาง</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-8">
                        <label>ล้อหน้า 110/70R17M/C 54H, ล้อหลัง 150/60R17M/C 66H</label>
                    </div>
                    
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>ขนาด (ยาวxกว้างxสูง มม.)</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-7">
                        <label>1,990 x 800 x 1,095</label>
                    </div>
                    <div class="col-1">
                        <label>มม.</label>
                    </div>
                    
                </div>
            </div>
            <div class="block-div">
                <div class="col-12 row" style="margin:10px 0px 10px 0px">

                    <div class="col-3">
                        <label>น้ำหนัก (กก.)</label>
                    </div>
                    <div class="col-1">
                        <label>:</label>
                    </div>
                    <div class="col-7">
                        <label>168.00</label>
                    </div>
                    <div class="col-1">
                        <label>กิโลกรัม</label>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>

<style>
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

.blah {
    
}                              


</style>

@endsection