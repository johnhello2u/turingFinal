<?php

$connect = mysqli_connect("localhost", "root", "root","twitter");

>>>>>>> fb93d0a0d7849fd4a41071dc70954a56d72fb83a
if ($connect) {
	echo "Conncetion Successful !!! ";
}
else {
	echo "ERROR: " . mysqli_connect_error();
}
?>
