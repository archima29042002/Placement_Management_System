<?php

session_start();
    require 'connect.php';
    
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $a=$_POST['first_name'];
        $b=$_POST['last_name'];
        $c=$_POST['date_of_birth'];
        $d=$_POST['email'];
        $e=$_POST['phone_no'];
        $f=$_POST['address'];
        $g=$_POST['state'];
        $h=$_POST['gender'];
        $i=$_POST['pg_marks'];
        $j=$_POST['g_marks'];
        $k=$_POST['hs_marks'];
        $l=$_POST['s_marks'];

        $sql = "INSERT INTO registration(firstName, lastName, dob, email, phoneNo, address, state, gender, pgMarks, gMarks, hsMarks, sMarks) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l')";

    
        if ($conn->query($sql) === TRUE) 
        {    
            $_SESSION['message'] = "Your application sent successfully!";

            header("location:registration.php");
            
            // echo "New Job Posted Successfully!!";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }

?>