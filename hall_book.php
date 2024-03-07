<?php
require_once "include/db.inc.php";
?>

<?php
if(isset($_POST['add_hallbook'])){

    $event_type=$_POST['event_type'];
    $date=$_POST['date'];
    $guest=$_POST['guest'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $info=$_POST['info'];
    $status='Pending';

$sql="INSERT INTO hall_book(event_type, date, guest, fname, lname, email, contactno, info,status) VALUES ('$event_type','$date','$guest','$fname','$lname','$email','$contactno','$info','$status')";

$result = mysqli_query($conn, $sql);

if($result){
    echo '<script>alert("Your Submition  success,We Will Contact You Soon")</script>';
}else{
    echo mysqli_error($conn);
}
}

?>