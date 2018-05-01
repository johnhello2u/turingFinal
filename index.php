<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>


  <?php include 'other/navbar.php'; ?>

  <body>
    <div class="container">
    <div class="row justify-content-md-center">

        <div class="col-md-auto">
          <br>
          <br>
          <br>

          <form class="form-3" action="login.php" method="post">
              <p class="clearfix">
                  <label for="login">Username</label>
                  <input type="text" name="usern" id="login" placeholder="Username">
              </p>
              <p class="clearfix">
                  <label for="password">Password</label>
                  <input type="password" name="pass" id="password" placeholder="Password">
              </p>
              <p class="clearfix">
                  <input type="submit" name="submit" value="Sign in">
              </p>
          </form>

          </br>
          <h6><a href="signup.php">Sign up</a> if you don't have an account.</h6>
        </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
