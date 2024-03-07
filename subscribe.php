<?php
require_once "include/db.inc.php";
?>

<?php
if(isset($_POST['submit'])){

$email= mysqli_real_escape_string($conn, $_POST['email']);

$sql="INSERT INTO subscribers (email) VALUES ('$email')";

$result = mysqli_query($conn, $sql);

        if(!$result){
           die('Could not post data' . mysqli_error());
            
        }else{
            
            echo '<script>alert("Thank you for subscrib us!")</script>';
            
        }
    }

?>