<?php 
      function getContactUs(){
        return "<section class='about'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='about_side_1'>
                                <h3 class='primaryHeading'>Contact us</h3>
                                <h1 class='secondaryHeading'>Any Query</br>Please Tell Us</h1>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='maincontactfeilds'>    
                                <form method='post' action='..\php\Services\Form\contactusForm.php'>
                                    <input name='name' class='contactInput' type='text' placeholder='Please enter your name'><br>
                                    <div class='minicontactfeilds'>
                                        <input name='phone' class='minicontactInput' type='text' placeholder='Please enter your phone'>
                                        <input name='address' class='minicontactInput' type='text' placeholder='Please enter your address'>
                                    </div>
                                    <textarea class='contactInput' placeholder='Please enter your Message' name='message' rows='3'></textarea><br>
                                    <input type='submit' class='btnStyle' value='Submit'>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-6 col-sm-12'>
                    <class class='contact_side_2'>
                        <div class='map'>
                            <iframe src='https://maps.google.com/maps?q=rizvia&t=k&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
                        </div>
                    </class>
                </div>
            </div>
        </div>
    </section>";
    }

?>