<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
    elseif($_SESSION['usertype']=='admin')
    {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="student1.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <label>Student Dashboard</label>
        <ul>
            <li>
                <a href="registration.php">Registration Form</a>
            </li>
            <li>
                <a href="company_details.php">Company Details</a>
            </li>
            <div class="logout">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
        </ul>

        <div class="heading">
            <h2 class="dashboard2">Welcome to ProjectWorld Institute Of Technology!!</h2>
            <br>
            <h4 class="dashboard4">Work is Magic and it defines you at every aspect of our life. As you work hard u will become smart and the irony is every smart worker will be successful man where as worthless hardwork is like monkey finding gold in a sea. <a class="hyperlink" href="registration.php">Go and fill your Details.</a></h4>
            <h4 class="dashboard4">We have got number of Partners from the companies who are tied up to our college and it is Increasing. We are doing our job of getting you placed and being a student its your duty to acomplish our responsibilities.</h4>
        </div>

    </nav>
</body>
</html>