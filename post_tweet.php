<?php

include_once("database.php");

if(isset($_POST['post_tweet'])) {
   $content = $_POST['content'];

   if(empty($content)) {
     echo "error";
   } else {
   $insert_post = "INSERT into tweets (tweet) VALUES ('$content')";
   run_mysql_query($insert_post);
   echo "success";

   header('Location:login.php');
 }
}

 ?>
