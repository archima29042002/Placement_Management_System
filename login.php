<?php

error_reporting(0);
session_start();

    require 'connect.php';

    // This condition only execute when the login button is clicked
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['username'];

        $pwd= $_POST['password'];

        $sql="select * from user where username ='".$name."' AND password ='".$pwd."' ";

        //checking with database
        $result=mysqli_query($conn, $sql);

        //fetching data
        $row=mysqli_fetch_array($result);

        //checking the type of the user who wants to login
        if($row["usertype"]=="student")
        {
            $_SESSION['username']=$name;

            $_SESSION['usertype']="student";

            //page redirection
            header("location:student.php");
        }
        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$name;

            $_SESSION['usertype']="admin";

            header("location:admin.php");
        }
        else
        {
            echo "Username or Password do not match";

        }
    }
?>