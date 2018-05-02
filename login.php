<?php

session_start();

require_once('database.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user page</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
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
        <?php $_SESSION['user'] = $esc_user; ?>
        <?php
            } else {
           die(header("location:index.php?loginFailed=true&reason=password"));
            }
        ?>
        <?php
        if(isset($_SESSION['user'])) {

          ?>
        <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
            </br></br>

                <h5 style="color:red;">Welcome, <?php echo $_SESSION['user']; ?>.</h5>

               <p class="clearfix">
                   <small><a href="logout.php">Log Out</a></small>
               </p>
            </div>
            <div class="col-md-6">
              <h1>Dragonweets</h1>
                  <form action="post_tweet.php" method="POST">
                    <textarea rows="3" cols="70" name="content" placeholder="Post here"></textarea></br>
                    <input type="submit" value="Post" name="post_tweet"/>
                  </form>
                  <ul style="list-style-type: none;">
                    <?php foreach(fetch_all("SELECT tweet FROM tweets ;") as $wetwet): ?>
                    <li style="list-style-type: none;"><div class= "listtweet"><?php echo $wetwet['tweet']; ?>  </div><br> </li>
                    <?php endforeach; ?>
                  </ul>
            </div>
            <div class="col">
              3 of 3
            </div>
        </div>
        </div>
      <?php  }
         ?>
  </body>
</html>
