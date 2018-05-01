<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>


  <?php include 'other/navbar.php'; ?>

  <body>
<br>
<br>
<br>
<form action="login.php" method="POST">
    <input class ='login_form' type="text" name="uid" placeholder="Username">
    <input class ='login_form' type="password" name="pwd" placeholder="Password">
<!--    <input class ='login_form_button' type="submit" value='LOGIN' name='login'> -->
	<button class ='login_form_button' type="submit" value='login' name='login'>LOGIN</button>
</form>
</br>
</br>
<h6><a href="signup.php">Sign up</a> if you don't have an account.</h6>

>>>>>>> fb93d0a0d7849fd4a41071dc70954a56d72fb83a

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
