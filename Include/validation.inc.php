<?php
    // --Functions to validate inputs--

    // Check if register inputs are empty
    function inputsEmptyRegister($name, $email, $mobile ,$nic, $password, $cpassword){
        $value;
        if(empty($name)  || empty($email) || empty($mobile) ||  empty($nic) || empty($password) || empty($cpassword)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    // Check if login inputs are empty
    function inputsEmptyLogin($email, $password){
        $value;
        if(empty($email) || empty($password)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    // Check if names are invalid
    function nameInvalid($name){
        $value;
        if(!preg_match("/^[a-zA-Z]+$/", $name)){
            $value = true;
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if email is invalid
    function emailInvalid($email){
        $value;
        if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/", $email)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if mobile is invalid
    function mobileInvalid($mobile){
        $value;
        if(!preg_match("/^[0][\d]{9}$/", $mobile)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }


     // Check if nic is invalid
     function nicInvalid($nic){
        $value;
    if(!preg_match("/^[0-9]{9}[vVxX]$/" , $nic)){
        $value = true;
    }
    else{
        $value = false;
        }
        return $value;
    }
    

    // Check if password is invalid
    function passwordInvalid($password){
        $value;
        if(!preg_match("/^.{5,}$/", $password)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if pass and re_pass aren't similar
    function passNotMatch($password, $cpassword){
        $value;
        if($password !== $cpassword){
            $value = true;
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if email or mobile available in the system
    function emailOrMobileAvailable($conn, $email, $mobile){
        $value;
        // Query
        $sql = "SELECT * FROM admin WHERE email = ? OR mobile = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?err=failedstmt");
            exit();
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "si", $email, $mobile);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if(!mysqli_fetch_assoc($data)){
                $value = false;
            }
            else{
                $value = true;
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);

        return $value;
    }
?>