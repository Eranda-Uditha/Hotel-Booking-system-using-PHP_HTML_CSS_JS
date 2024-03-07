<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/stylenew.css" />
	</head>
<body style = "background-color:rgba(235 170 240 / 15%);">
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >REACH Hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
			<li class = "dropdown">
			<a  ><span class="badge badge-pill badge-warning"><?php echo $name;?>    |</span></a>
					<li><a href="logout.php" style = "background: pink;font-size: 15px; font-weight: 700;" ></i> Logout</a></li>
			</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li ><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li> 	
            <li><a href = "message.php" >Messages</a></li>		
			<li><a href = "subscribe.php">Subscribers</a></li>	
			<li  class = "active"><a href = "hall_book.php">Hall Booking</a></li>	
	
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
        <?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `hall_book` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `hall_book` WHERE `status` = 'read'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
            <a class = "btn  btn-success " href = "hall_book.php"><span class = "badge"><?php echo $f_p['total']?></span> Pending </a>
				<a class = "btn btn-success" href = ""><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
            
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Event Type</th>
							<th>Date of Event</th>
							<th>Number of Guests</th>
							<th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
							<th>Contact No</th>
							<th>Additional Information</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `hall_book` WHERE `status` = 'read'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['event_type']?></td>
							<td><?php echo $fetch['date']?></td>
							<td><?php echo ($fetch['guest'])?></td>
                            <td><?php echo ($fetch['fname'])?></td>
                            <td><?php echo ($fetch['lname'])?></td>
							<td><?php echo ($fetch['email'])?></td>
							<td><?php echo ($fetch['contactno'])?></td>
							<td><?php echo ($fetch['info'])?></td>
							<td><center> <a class = "btn btn-success" onclick = "confirmationDelete(this); return false;" href = "hall_delete.php?id=<?php echo $fetch['id']?>"> Delete</a></center></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>