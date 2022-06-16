<?php
include ("../php/services/DBConnection.php");


$target_dir = "../images/Product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (! is_dir($target_dir) ) mkdir ( $target_dir , 0755);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
    uploadData();
    
    
    
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    uploadData();
    
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

function uploadData(){
  $Query = "INSERT INTO `product`(`Title`, `Price`, `Details`, `Orders`) VALUES ('".$_POST['title']."','".$_POST['price']."','".$_POST['details']."','1')";
  

  $result = $GLOBALS["conn"]->query($Query);
  if($result){
    echo "Successfully Uploaded";

    $result = $GLOBALS["conn"]->query("SELECT `PID` FROM `product` order by `PID` desc limit 1");
    $row = $result->fetch_assoc();


    $Query = "INSERT INTO `product_images`(`PID`, `imageName`) VALUES ('".$row['PID']."','".basename($_FILES["fileToUpload"]["name"])."')";

    $result = $GLOBALS["conn"]->query($Query);
    if($result){
      echo "Successfully Uploaded";
    }
  }else{

  }

  echo "<script>
  history.go();
  </script>";
}


?>