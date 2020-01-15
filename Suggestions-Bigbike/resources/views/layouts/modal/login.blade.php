
     <!-- Modal -->
     <div class="modal fade" id="Modal-login" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <button class="btn btn-outline-danger" id="close-btn"  class="close" data-dismiss="modal">X</button>
            <div class="login-body">
              <div  id="head " class="cenn"><img class="prof" src="http://127.0.0.1:8000/img/bike/prof.png" alt=""></div>
              <br>
              <h2 id="head">เข้าสู่ระบบ*</h2>
              <p id="head">เว้บไซต์ให้คำแนะนำการชื้อขายและประเมินราคาบิ๊กไบค์มือสอง</p>

            <form action="Login"  method="POST" class="needs-validation" novalidate>
              @csrf
                <div class="form-group">
                  <label for="uname">ชื่อผู้ใช้*</label>
                  <input type="text" class="form-control" id="uname" placeholder="ป้อนชื่อผู้ใช้" name="uname" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนชื่อผู้ใช้</div>
                </div>
                <div class="form-group">
                  <label for="pwd">รหัสผ่าน*</label>
                  <input type="password" class="form-control" id="pwd" placeholder="ป้อนรหัสผ่าน" name="pswd" required>
                  <div class="valid-feedback">ถูกต้อง</div>
                  <div class="invalid-feedback">กรุณาป้อนรหัสผ่าน</div>
                </div>
                <button id="btn-submit" type="submit" class="btn btn-outline-primary btn-block" >เข้าสู่ระบบ</button>
                <br>
                <label class="float-right">ผู้ใช้ใหม่? <a title="regiter" class="text-primary" data-dismiss="modal" data-toggle="modal" data-target="#Modal-regiter">สมัครสมาชิก</a></label>
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
  height: 50px;
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
  