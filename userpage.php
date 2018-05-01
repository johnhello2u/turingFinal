<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php require('database.php'); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>user page</title>
  </head>
  <?php include 'other/navbar.php'; ?>


  <body>

<h1>tweets</h1>
    <ul style="list-style-type: none;">
      <?php foreach(fetch_all("SELECT tweet FROM tweets ;") as $wetwet): ?>
      <li style="list-style-type: none;"><div class= "listtweet"><?php echo $wetwet['tweet']; ?>  </div><br> </li>
      <?php endforeach; ?>
    </ul>





</html>
