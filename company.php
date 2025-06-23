<?php
session_start();

    require 'connect.php';

    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $job_type = $_POST['job_type'];
        $application_deadline = $_POST['application_deadline'];
        $skills_required =  $_POST['skills_required'];
        $city = $_POST['city'];
        $job_description = $_POST['job_description'];
   
        //Insert job into database
        $sql= "INSERT INTO job ( jobTitle, companyName, jobType, applicationDeadline, skills, city, jobDescription) VALUES ('$job_title', '$company_name', '$job_type', '$application_deadline', '$skills_required', '$city', '$job_description')";

        if ($conn->query($sql) === TRUE) 
        {
            $_SESSION['message'] = "New Job Posted successfully!";

            header("location:addcompany.php");

            // echo "New Job Posted Successfully!!";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
?>
