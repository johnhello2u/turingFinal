<?php


<<<<<<< HEAD
$connect = mysqli_connect("localhost", "root", "root","twitter");
=======
$connect = mysqli_connect("localhost", "root", " ","twitter");
>>>>>>> 3535e0172d1643714745fed3561a90ea98f58e30
if ($connect) {
	echo "Conncetion Successful !!! ";
}
else {
	echo "ERROR: " . mysqli_connect_error();
}
?>
