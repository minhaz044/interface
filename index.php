
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
    <form class="form-control-file" action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"></br>
        <input type="submit" class="btn btn-defalut btn-success" value="Upload Image" name="submit">
    </form>
  </div>

</div>


</body>
</html>
