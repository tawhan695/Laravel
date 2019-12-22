
     <!-- Modal -->
     <div class="modal fade" id="Modal-login" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <button class="btn btn-outline-danger" id="close-btn"  class="close" data-dismiss="modal">X</button>
            <div class="login-body">
              <div  id="head " class="cenn"><img class="prof" src="img/bike/prof.png" alt=""></div>
              <br>
              <h2 id="head">Welcome</h2>
              <p id="head">Log in to your account to continue</p>

              <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                {{-- <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                  </label>
                </div> --}}
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
  