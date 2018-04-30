<?php


$connect = mysqli_connect("localhost", "root", "Luther&vanity?911","twitter");
if ($connect) {
	echo "Conncetion Successful !!! ";
}
else {
	echo "ERROR: " . mysqli_connect_error();
}
?>
