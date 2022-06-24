<?php
   
  function getLoginSection(){
  return "<section class='authPage'>
  <div class='container'>
      <div class='row'>
          <div class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12'>
              <div class='auth'>
                  <form  method='post' action=''>
                      <h1>Login</h1>
                      <input class='contactInput' name='email' type='email' placeholder='Email Address' required ><br>
                      <input class='contactInput' name='password' type='password' placeholder='Password' required><br>
                      <input type='submit' class='btnStyle' value='Login'>
                      <br>
                      <br>
                      <a href='login.php?page=signUP'>Create new Account</a>&nbsp;&nbsp;&nbsp;<a href=''>Forget passowrd ?</a>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>";
}

?>