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
<form>
    <input class ='login_form' type="text" name="uid" placeholder="Username">
    <input class ='login_form' type="password" name="pwd" placeholder="Password">
    <button class ='login_form_button' type="submit">LOGIN</button>
</form>

    <div class="outside_box_signup">
    <form class='signup_form' action="signup_connect_sql.php" method="POST">
        <input class ='signup_form_inside' type="text" name="first" placeholder="Firstname"><br><br />
        <input class ='signup_form_inside' type="text" name="last" placeholder="Lastname"><br><br />
        <input class ='signup_form_inside' type="text" name="uid" placeholder="Username"><br><br />

        <input class ='signup_form_inside' type="text" name="email" placeholder="Email"><br><br />

        <input class ='signup_form_inside' type="password" name="pwd" placeholder="Password"><br><br />
        <button class ='signup_form_button' type="submit">SIGN UP</button>
    </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
