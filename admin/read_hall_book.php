<?php
	require_once 'connect.php';
	$conn->query("UPDATE `hall_book` SET  `status` = 'Read' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	header("location:hall_book.php");
?>