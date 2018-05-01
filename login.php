<?php
include_once('database.php');

if (isset($_POST['login'])) {
        $user = $_POST['uid'];
        $pass = $_POST['pwd'];
	$pass = sha1($pass);

        if (empty($user)  || empty($pass)) {

        if (empty($user)){
                echo "<font color='red'>Username field is empty.</font><br/>";
        }

        if (empty($pass)){
                echo "<font color='red'>Password field is empty.</font><br/>";
        }
}
        else {

		$result = mysqli_query($connect,"SELECT * FROM users");
		foreach ($result as $res) {
			if ($res['password'] == $pass && $res['username'] == $user ) {
<<<<<<< HEAD
				header('Location: test.php');
=======
				header("location:test.php");
>>>>>>> 3535e0172d1643714745fed3561a90ea98f58e30
}
			else {
				echo "Cant Login";
}
<<<<<<< HEAD

=======
			
>>>>>>> 3535e0172d1643714745fed3561a90ea98f58e30
}
}
}
?>
