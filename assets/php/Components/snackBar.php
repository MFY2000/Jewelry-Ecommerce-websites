<?php 

function getSnackBar($message, $type){
  $messageBody = "";
  
    if($type != "Success"){
      $messageBody = '<div class="wtg-alert wtg-alert-danger alertBox" id="alert">
      <div class="wtg-alert-title">
        <i class="wtg-alert-icon glyphicon glyphicon-star"></i>
        <strong>Error</strong>
      </div>
      <p class="wtg-alert-text">
        '.$message.'
      </p>
    </div>';
    }else{
      $messageBody = '<div class="wtg-alert wtg-alert-success alertBox " id="alert">
      <div class="wtg-alert-title">
        <i class="wtg-alert-icon glyphicon glyphicon-star"></i>
        <strong>Success</strong>
        </div>
        <p class="wtg-alert-text">
        '.$message.'
        </p>';
      }
      
      return  $messageBody. "<script>setTimeout(function(){document.getElementById('alert').style.display = 'none';},5000);</script>";
}


?>