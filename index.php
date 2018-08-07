<?php



if (isset($_FILES['fileToUpload']) ) {

    session_start();




if(empty($_FILES['fileToUpload']['name'])===true){
  echo"Please Select A File to upload";
}else{
  $allowed=array('jpg', 'jpeg', 'gif', 'png');
  $file_name=$_FILES['fileToUpload']['name'];
  $file_extn=explode('.',$file_name);
  $file_extn=end($file_extn);
  $file_extn=strtolower($file_extn);
  $file_temp=$_FILES['fileToUpload']['tmp_name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $new_size = $file_size/1024;
  if(in_array($file_extn,$allowed)){
    if($new_size <2000){
      include("DBcon.php");

      $file_name=substr(md5(time()),0,10);
      $_SESSION["user_id"] = $file_name;//use this session to find the picture and the current user (shahjalal shorov);
      $file_path="uploads/".$file_name.".".$file_extn;
      $move_result=move_uploaded_file($file_temp,$file_path);

  $query="INSERT INTO imgStore (sessionId, imgPath) VALUES ('$file_name','$file_path')";
  $execute=mysqli_query($con,$query);
if($execute && $move_result){
  echo "Image Uploaded sucessfully</br>Current User ID:";
  echo   $_SESSION["user_id"];
  echo "Other INfo";

  /***********
  so image is uploaded sucessfully .
  take image path and session as your input ."$_SESSION["user_id"]" is user id and  "$file_path" is path;
  and other ...././.Show Result
  **************/
}else{
  echo "Data Insertion Failed";
}


    }else{
          echo"Upload a File within 2MB ";
    }




  }else{
    echo"Incorrect File Type.Allowed ";
    echo implode(',',$allowed);
  }



}


}
else{
  ?>


<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
  <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Home</title>
</head>

<body>
<div class="container" style="padding-top:15%;">
  <div class="col-md-4 col-md-offset-4">
    <form class="form-control-file" action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"></br>
        <input type="submit" class="btn btn-defalut btn-success" value="Upload Image" name="submit_img">
    </form>
  </div>

</div>


</body>
</html>
<?php
}
 ?>
