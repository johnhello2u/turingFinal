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
				header('Location: test.php');

>>>>>>> fb93d0a0d7849fd4a41071dc70954a56d72fb83a
}
			else {
				echo "Cant Login";
}

>>>>>>> fb93d0a0d7849fd4a41071dc70954a56d72fb83a
}
}
}
?>
