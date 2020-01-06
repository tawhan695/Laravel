
     <!-- Modal -->
     <div class="modal fade" id="Modal-regiter" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <button class="btn btn-outline-danger" id="close-btn"  class="close" data-dismiss="modal">X</button>
            <div class="login-body">
              <div  id="head " class="cenn"><img class="prof" src="img/bike/prof.png" alt=""></div>
              <br>
              <h2 id="head">Registration</h2>
              {{-- form-group col-md-5 --}}
              <form action="Regiter" method="POST" class="needs-validation" novalidate>
                 @csrf
                <label class="mdb-main-label">คำนำหน้าชื่อ*</label>
                <div class="form-group">
                  <select name="title_name" class="browser-default custom-select custom-select-lg mb-3">
                    <option selected value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="uname">ชื่อ*</label>
                  <input type="text" class="form-control" id="fname" placeholder="ป้อนชื่อ" name="fname" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนชื่อ</div>
                </div>
                <div class="form-group">
                  <label for="lname">นามสกุล*</label>
                  <input type="text" class="form-control" id="Lname" placeholder="ป้อนนามกุล" name="Lname" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนนามสกุล</div>
                </div>
                <div class="form-group">
                  <label for="uname">ชื่อผู้ใช้*</label>
                  <input type="text" class="form-control" id="uname" placeholder="ป้อนชื่อผู้ใช้" name="uname" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนชื่อผู้ใช้</div>
                </div>
                <div class="form-group">
                  <label for="uname">อีเมล*</label>
                  <input type="email" class="form-control" id="email" placeholder="ป้อนอีเมล" name="email" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนอีเมล</div>
                </div>
                <div class="form-group">
                  <label for="pwd">รหัสผ่าน*</label>
                  <input type="password" class="form-control" id="pwd" placeholder="ป้อนรหัสผ่าน" name="pswd" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนรหัสผ่าน</div>
                </div>
                <div class="form-group">
                  <label for="pwd">ยืนยันรหัสผ่าน*</label>
                  <input type="password" class="form-control" id="pwd2" placeholder="ป้อนรหัสผ่าน" name="pswd" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนรหัสผ่าน</div>
                </div>
                <div class="form-group">
                  <label for="uname">วันเดือนปีเกิด*</label>
                  <input type="date" class="form-control" id="birth" placeholder="ป้อนวันเดือนปีเกิด" name="birth" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนวันเดือนปีเกิด</div>
                </div>
                <div class="form-group">
                  <label for="uname">อายุ*</label>
                  <input type="number" class="form-control" id="age" placeholder="ป้อนอายุ" name="age" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนอายุ</div>
                </div>
                <div class="form-group">
                  <label for="uname">ส่วนสูง*</label>
                  <input type="number" class="form-control" id="heiht" placeholder="ป้อนส่วนสูง" name="heiht" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนส่วนสูง</div>
                </div>


                <button id="btn-submit" type="submit" class="btn btn-outline-primary btn-block" >สมัคร</button>
                <br>
                <label class="float-right">มีบัญชีอยู่แล้ว? <a title="regiter" class="text-primary" data-dismiss="modal" data-toggle="modal" data-target="#Modal-login">เข้าสู่ระบบ</a></label>
              </form>
            </div>
            
            <script>
            // Disable form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
            setInterval(function(){ 
              var pass1 =document.getElementById('pwd').value;
              // console.log(pass1);
              var pass2 =document.getElementById('pwd2').value;
              // console.log(pass2);
              if(pass1.length>8){
                if(pass1 == pass2){
                
                console.log('ตรง')
              }else if(pass2.length>8){
                alert("รหัส่านไม่รงกัน");
                document.getElementById('pwd').value="";
                document.getElementById('pwd2').value="";
              }
              
              }

             }, 3000);

             setInterval(function(){
              var birth =document.getElementById('birth').value;
              if(birth.length==10){
                var d = new Date();
                var d2 = new Date(birth);
                var Y =d.getFullYear()-d2.getFullYear();
                document.getElementById('age').value=Y;
              }
               }, 3000);
          //   setInterval(function(){
          //     var pass1 =document.getElementById('pwd').value;
          //     
            
          //     var pass2 =document.getElementById('pwd2').value;
          //     if(pass1 != pass2){
          //       form.classList.add('was-validated');
          //       console.log('ตรง')
          //     }else{
          //       alert("รหัส่านไม่รงกัน");
          //     }
          //  }
          //   }, 1000);



            </script>
          </div>
          {{--  --}}
        </div>
      </div>
    </div>
  </div>

<style>

.login-body{
      padding: 10% 15% 10% 15%;
}
#head{
  text-align: center;
}
#close-btn{
    float:  right;
    border-radius: 50%;
    
}
.needs-validation input,#btn-submit{
  border-radius: 30px;
  height:10px;
  width: 100%;
} 
.prof{
  border-radius: 50%;
  width: 20%;

}
.cenn{
  text-align: center;
  margin: auto;
}
</style>
  