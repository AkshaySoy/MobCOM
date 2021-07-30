<?php
$target_dir = "E:/xampp/htdocs/mobcom/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//check if inputs are entered
if (isset($_POST["brand_name"]) && isset($_POST["model_name"])){
  $target_file = $target_dir . "$_POST[brand_name]/$_POST[model_name]/" . basename($_FILES["fileToUpload"]["name"]);
}

// Create brand directory if it does not exist
if(!is_dir("$target_dir"."$_POST[brand_name]/")) {
  mkdir("$target_dir"."$_POST[brand_name]/");
}
// Create product directory if it does not exist
if(!is_dir("$target_dir"."$_POST[brand_name]/$_POST[model_name]/")) {
  mkdir("$target_dir"."$_POST[brand_name]/$_POST[model_name]/");
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
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
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>