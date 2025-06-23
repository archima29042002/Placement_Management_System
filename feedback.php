<?php
session_start();

    require 'connect.php';

    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $a = $_POST['first_name'];
        $b = $_POST['last_name'];
        $c = $_POST['email'];
        $d = $_POST['feedback_description'];
   
        //Insert job into database
        $sql= "INSERT INTO feedback(firstName, lastName, email, description) VALUES ('$a', '$b', '$c', '$d')";

        if ($conn->query($sql) === TRUE) 
        {
            $_SESSION['message'] = "Thanks for your Feedback!";

            header("location:feedback_details.php");
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
?>
