<?php

session_start();
    require 'connect.php';
    
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $a=$_POST['roll_no'];
        $b=$_POST['first_name'];
        $c=$_POST['last_name'];
        $d=$_POST['email'];
        $e=$_POST['phone_no'];
        $f=$_POST['gender'];
        $g=$_POST['address'];
        $h=$_POST['state'];
        $i=$_POST['job_title'];
        $j=$_POST['company_name'];
        $k=$_POST['job_type'];
        $l=$_POST['location'];

        $sql = "INSERT INTO apply_details(studentRoll, firstName, lastName, email, phoneNo, gender, address, state, jobTitle, companyName, jobType, location) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l')";

    
        if ($conn->query($sql) === TRUE) 
        {    
            $_SESSION['message'] = "Your application sent successfully!";

            header("location:apply.php");
            
            // echo "New Job Posted Successfully!!";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }

?>