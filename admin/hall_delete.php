<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `hall_book` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	 header("location: hall_bookread.php");