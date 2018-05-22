<?php

include('other/navbar.php');

include_once('database.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>

  <body>
<br>
<br>
<br>

  <div class="form-3">
    <form class='signup_form' action="signup_connect_sql.php" method="POST">
        <p class="clearfix">
            <label for="first">First Name</label>
            <input class ='signup_form_inside' type="text" name="first" id="first" placeholder="First Name">
            <label for="last">Last Name</label>
        <input class ='signup_form_inside' type="text" name="last" id="last" placeholder="Last Name">
        </p>
        <p class="clearfix">
            <label for="username">Username</label>
            <input class ='signup_form_inside' type="text" name="uid" id="username" placeholder="Username">
        </p>
        <p class="clearfix">
            <label for="email">Email address</label>
            <input class ='signup_form_inside' type="text" name="email" id="email" placeholder="Email">
        </p>
        <p class="clearfix">
            <label for="password">Password</label>
            <input class ='signup_form_inside' type="password" name="pwd" id="password" placeholder="Password">
        </p>
        <p class="clearfix">
            <input class ='signup_form_button' type="submit" value='Sign Up' name='signup'>
        </p>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
