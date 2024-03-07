<?php
	require_once 'connect.php';
	$conn->query("UPDATE `contact` SET  `status` = 'Read' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	header("location:message.php");
?>