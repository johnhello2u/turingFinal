<?php
include('database.php');

if (isset($_POST['signup'])) {
	$first_name = $_POST['first'];
	$last_name = $_POST['last'];
	$user = $_POST['uid'];
	$mail  = $_POST['email'];
	$pass = sha1($_POST['pwd']);

	if (empty($first_name) || empty($last_name) || empty($user)  || empty($mail) || empty($pass)) {

	if (empty($first_name)){
		echo "<font color='red'>Firstname field is empty.</font><br/>";
	}
	if (empty($last_name)){
                echo "<font color='red'>Lastname field is empty.</font><br/>";
        }
	if (empty($user)){
                echo "<font color='red'>Username field is empty.</font><br/>";
        }


        if (empty($mail)){
                echo "<font color='red'>Email field is empty.</font><br/>";
        }

        if (empty($pass)){
                echo "<font color='red'>Password field is empty.</font><br/>";
        }
}
	else {

	$output = mysqli_query($connect, "INSERT INTO users (first_name,last_name,username,email_address,password) VALUES('$first_name','$last_name','$user','$mail','$pass')");
	echo "success";
 mysqli_query($connect,$output);	
}

}


$result = mysqli_query($connect,"SELECT * FROM users");
                foreach ($result as $res) {
			echo $res['username']."</br>";
		}
?>
