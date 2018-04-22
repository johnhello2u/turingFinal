<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <link rel="stylesheet" href="style/style.css">
  </head>


  <?php include 'other/navbar.php'; ?>

  <body>

<br>
<br>


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



  </body>
</html>
