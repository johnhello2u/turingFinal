<?php

$connect = mysqli_connect("localhost", "root", "root","twitter");

if ($connect) {
	echo "Conncetion Successful !!! ";
}
else {
	echo "ERROR: " . mysqli_connect_error();
}
?>
