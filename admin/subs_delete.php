<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `subscribers` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	 header("location: subscribe.php");
?>

