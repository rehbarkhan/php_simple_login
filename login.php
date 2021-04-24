<?php

    $user_name = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $conn = mysqli_connect("localhost", "root", "", "newweb");
    $sql = "select * from user_info where user_name = '$user_name' and user_password='$user_password'";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo 'Logged In Successfully';
    }else{
        echo 'Unable to logged in';
    }
?>