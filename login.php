<?php require_once('database.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user page</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu" rel="stylesheet">
  </head>
  <body>

    <?php include 'other/navbar.php'; ?>


    <!-- this is here checks if the user and pass are set (has nothing to do with below) -->
    <?php  if (!isset($_POST['usern']) || !isset($_POST['pass'])) {
        die('Illigal operation');
    }

    $user = $_POST['usern'];
    $pass = sha1($_POST['pass']);


      $esc_user= escape_this_string($user);
      $esc_password = escape_this_string($pass);

    $connection;
        $query = "SELECT * FROM users where username = '$esc_user' AND password = '$esc_password' ";
        $id = fetch_record($query);
    ?>

      <?php   if($id) { ?>
        <p>you are logged in motherfucker!!!</p>


        <?php
            } else { ?>
                 "ERROR! Wrong username and password combination, go back and try again";
                <?php echo $pass ?>
        <?php
            }
        ?>

        <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
              1 of 3
            </div>
            <div class="col-md-auto">
              Variable width content
            </div>
            <div class="col col-lg-2">
              3 of 3
            </div>
        </div>
        </div>
  </body>
</html>
