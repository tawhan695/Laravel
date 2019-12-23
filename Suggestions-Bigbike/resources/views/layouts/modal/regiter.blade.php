
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
              <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="form-group">
                  <select class="browser-default custom-select custom-select-lg mb-3">
                    <option selected>คำนำหน้าชื่อ</option>
                    <option value="1">นาย</option>
                    <option value="2">นาง</option>
                    <option value="3">นางสาว</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="uname">ชื่อ:</label>
                  <input type="text" class="form-control" id="Fname" placeholder="ชื่อ" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">กรุณาป้อนชื่อ</div>
                </div>
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="Lname" placeholder="Enter username" name="Lname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>


                <button id="btn-submit" type="submit" class="btn btn-outline-primary btn-block" >LOGIN</button>
                <br>
                <label class="float-right">No account yet?<a title="regiter" class="text-primary" data-dismiss="modal" data-toggle="modal" data-target="#Modal-regiter">Sign up now</a></label>
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
  