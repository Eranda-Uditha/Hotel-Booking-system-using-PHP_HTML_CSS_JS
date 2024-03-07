<?php

require_once "./db.inc.php";
require_once "./validation.inc.php";

if(isset($_POST["register_btn"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $nic = $_POST["nic"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
     // Input validation
     if(inputsEmptyRegister($name, $email, $mobile, $nic, $password, $cpassword)){
        header("location: ../index.php?err=empty_inputs");
        exit();
    }
    else if(nameInvalid($name)){
        header("location: ../index.php?err=invalid_name");
    }
    else if(emailInvalid($email)){
        header("location: ../index.php?err=invalid_email");
    }
    else if(mobileInvalid($mobile)){
        header("location: ../index.php?err=invalid_mobile");
    }
    else if(nicInvalid($nic)) {
        header("location: ../index.php?err=invalid_nic");
    }
    else if(passwordInvalid($password)){
        header("location: ../index.php?err=invalid_password");
    }
    else if(passNotMatch($password, $cpassword)){
        header("location: ../index.php?err=different_password");
    }
    else if(emailOrMobileAvailable($conn, $email, $mobile)){
        header("location: ../index.php?err=available_emailormobile");
    } 
    else{
        // If all inputs are error free
        registerNewUser($conn, $name, $email, $mobile, $nic ,$password, $cpassword);  
    } 
}
else{
    header("location: ../index.php");
    exit();
}

// Function for register a new user
function registerNewUser($conn, $name, $email, $mobile, $nic ,$password, $cpassword){
    // Password encryption
    $passHashed = password_hash($password, PASSWORD_DEFAULT);
    // Query
    $sql = "INSERT INTO admin (name, email, mobile, nic, password) VALUES (?, ?, ?, ?, ?);";
    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($conn);
    // Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?err=failedstmt");
    }
    else{
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $mobile, $nic , $passHashed);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Close the statement
        mysqli_stmt_close($stmt);

        header("location: ../index.php?err=noerrors");
    }
}

?>