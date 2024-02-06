<?php 

define('REQUIRED_FIELD_ERROR', 'This field is required');
$errors = [];

$username = "";
$password = "";
$cPassword = "";
$fname = "";;
$lname = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";
  $username = post_data('userName');
  $password = post_data('password');
  $cPassword = post_data('cPassword');
  $fname = post_data('fname');
  $lname = post_data('lname');
  echo " <pre>";
  var_dump($username, $password, $fname, $lname );
  echo "</pre>";
  if (!$username) {
    $errors['username'] = REQUIRED_FIELD_ERROR;
  }
  if (!$password) {
    $errors['password'] = REQUIRED_FIELD_ERROR;
  }
  if (!$cPassword) {
    $errors['cPassword'] = REQUIRED_FIELD_ERROR;
  }
  if($password && $cPassword && strcmp($password, $cPassword) !== 0) {
    $errors['cPassword'] = "Password not match";
  }
  if (!$fname) {
    $errors['fname'] = REQUIRED_FIELD_ERROR;
  }
  if (!$lname) {
    $errors['lname'] = REQUIRED_FIELD_ERROR;
  }
}

function post_data($field) {
  $_POST[$field] ??= '';
  return htmlspecialchars(stripslashes($_POST[$field]));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>User Registration Form</title>
</head>
<body>
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Responsive Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form action="" method="post">
          <div class="input_field <?php echo isset($errors['username']) ? 'is_invalid' : '' ?>"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="userName" placeholder="User Name" value="<?php echo $username ?>" />
            <div class="invalid_feedback">
              <?php echo $errors['username'] ?? ""; ?>
            </div>
          </div>
          <div class="input_field <?php echo isset($errors['password']) ? 'is_invalid' : '' ?>"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" value="<?php echo $password ?>" />
            <div class="invalid_feedback">
              <?php echo $errors['password'] ?? ""; ?>
            </div>
          </div>
          <div class="input_field <?php echo isset($errors['cPassword']) ? 'is_invalid' : '' ?>"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="cPassword" placeholder="Re-type Password" value="<?php echo $cPassword ?>"/>
            <div class="invalid_feedback">
              <?php echo $errors['cPassword'] ?? ""; ?>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field <?php echo isset($errors['fname']) ? 'is_invalid' : '' ?>"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname ?>" />
                <div class="invalid_feedback">
              <?php echo $errors['fname'] ?? ""; ?>
            </div>
              </div>
            </div>
            <div class="col_half">
              <div class="input_field <?php echo isset($errors['lname']) ? 'is_invalid' : '' ?>"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname ?>" />
                <div class="invalid_feedback">
              <?php echo $errors['lname'] ?? ""; ?>
            </div>
              </div>
            </div>
          </div>
            	<div class="input_field radio_option">
              <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label>
              </div>
              <div class="input_field select_option">
                <select>
                  <option>Select a country</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                </select>
                <div class="select_arrow"></div>
              </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1">
    			<label for="cb1">I agree with terms and conditions</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2">
    			<label for="cb2">I want to receive the newsletter</label>
            </div>
          <input class="button" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p>
</body>
</html>