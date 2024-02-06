<?php

$errorMessage = '';

if(isset($_FILES['file'])) {

  echo "<pre>";
  var_dump($_FILES);
  echo "</pre>";

  
  $file = $_FILES['file'];
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  if($file['size'] > 5 * 1024 * 1024) {
    $errorMessage = 'You can\'t upload more then 5M';
  }else if(!in_array($ext, ['png', 'jpeg', 'svg', 'jpg'])) {
    $errorMessage = 'You can only upload png, jpeg, svg, jpg formate';
  } else {
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
  }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Form</title>
</head>
<body>
  
<h1>File Upload</h1>
<form action="" method="post" enctype="multipart/form-data">

  <input type="file" name="file" id="">
  <p><?php echo $errorMessage ?></p>
  <input type="submit" value="Upload">

</form>
<img src="<?php echo isset($_FILES['file']['name']); ?>" alt="">
</body>
</html>