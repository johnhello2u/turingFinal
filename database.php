<?php

$connect = mysqli_connect("localhost", "root", "root","twitter");

<<<<<<< HEAD



$connect = mysqli_connect("localhost", "root", "","twitter");
=======
>>>>>>> fb93d0a0d7849fd4a41071dc70954a56d72fb83a
>>>>>>> 2cbdba6d3c7e6521cec7a7d6bd0783fcf5351195
if ($connect) {
	echo "Conncetion Successful !!! ";
}
else {
	echo "ERROR: " . mysqli_connect_error();
}
?>
