<?php 

function getSnackBar($message, $type){
  return "
  <div id='snackbar' class='$type'>
    <span>
      ".($type == 'error' ? "<i class='fa fa-exclamation'></i>":"<i class='fa fa-check-square'></i>")."
      
      $message..
    </span>
  
    <span class='btn-close'><i class='fa fa-window-close' onclick='closeWindow()'></i><span>
  </div>

  <script>
  var x = document.getElementById('snackbar');
  
    function closeWindow() {
      x.className = '';
    }
  
    setTimeout(function(){
      x.className += ' show';
    } , 1000);
    
    setTimeout(closeWindow , 5000);
  </script>
  ";
}


?>