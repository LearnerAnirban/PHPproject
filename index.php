<?php 
echo "<pre>";
var_dump($_GET);
echo "</pre>";
$keyword = "";
if(isset($_GET['name'])) {
$keyword = $_GET['name'];
echo $keyword;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?php ?>" method="get">
    <label for="name">Type Your Full Name</label>
    <input type="text" name="name" id="name" value = "<?php echo $keyword ?>" placeholder = "Type your Name">
  </form>
</body>
</html>