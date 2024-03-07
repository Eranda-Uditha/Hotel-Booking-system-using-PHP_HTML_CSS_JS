<?php
require_once "include/db.inc.php";
?>

<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(name, email, number, subject, msg) VALUES ('$name','$email','$number','$subject','$msg')";

$result = mysqli_query($conn, $sql);

if($result){
    echo '<script>alert("Your Submition  success,We Will Contact You Soon")</script>';
}else{
    echo mysqli_error($conn);
}
}

?>