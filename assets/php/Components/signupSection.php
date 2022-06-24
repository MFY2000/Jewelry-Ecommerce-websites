<?php 

  function getSignUpSection(){

    return "<section class='authPage'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12'>
                <div class='auth'>
                    <form method='post' action='..\php\Services\Form/signupForm.php'>
                        <h1>Signup</h1>
                        
                        <input class='contactInput' type='email' name='Email' placeholder='Email Address' required  > <br>
                        <input class='contactInput' type='password' name='Password' placeholder='Password' required  > <br>
                        <input class='contactInput' type='password' name='RePassword' placeholder='Re type Password' required  > <br>
                        <input class='contactInput' type='text' name='Firstname' placeholder='Firstname' required  > <br>
                        <input class='contactInput' type='text' name='Lastname' placeholder='Lastname' required  > <br>
                        
                        <div class='cbi'>
                            <input type='checkbox' name='registering'>&nbsp;
                            <p>By registering you agree our <b><a href='termsandcondition.php'>Terms of user</a></b></p>
                        </div>
                        <input type='submit' class='btnStyle' value='Signup'>
                        <br>
                        <br>
                        <a href='login.php?page=signIN'>Already have a account ?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>";

  }


?>