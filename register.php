<?php


    //taking data from form
    $user_name = $_POST['email_address'];
    $user_pass = $_POST['password'];

    //connecting to db
    $conn = mysqli_connect("localhost", "root", "", "newweb");

    $sql = "insert into user_info values('$user_name','$user_pass')";
    if($conn->query($sql)){
       echo '';

    }
    else{
        echo "error";
    }
?>
