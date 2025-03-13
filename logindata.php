<?php

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $ip = $_SERVER["REMOTE_ADDR"];

    // $connection = mysqli_connect("localhost","root","","project_cms") or die("connection fail");
    include "dbcon.php";

    $query = "select * from user where email='$email' and pass='$pass'";

    $result = mysqli_query($connection,$query);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["pass"] = $row["pass"];
        header("Location: index.php");
    }
    else{
        echo "no";
    }
    mysqli_close($connection);

    
?>