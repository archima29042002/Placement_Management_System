<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        
        echo "<script type='text/javascript'>
        
        alert('$message');

        </script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
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
            <div class="logout">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
        </ul>

        <div class="container">
            <div class="title">Job Application Form</div>
            <form action="apply_check.php" method="POST">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Student Roll No:-</span>
                        <input type="number" name="roll_no" placeholder="Enter your Roll no" required>
                    </div>

                    <div class="input-box">
                        <span class="details">First Name:-</span>
                        <input type="text" name="first_name" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name:-</span>
                        <input type="text" name="last_name" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email:-</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Phone Number:-</span>
                        <input type="number" name="phone_no" placeholder="Enter your phone no" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Gender:-</span>
                        <input type="text" name="gender" placeholder="Enter your gender" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Address:-</span>
                        <input type="text" name="address" placeholder="Enter your address" required>
                    </div>

                    <div class="input-box">
                        <span class="details">State:-</span>
                        <input type="text" name="state" placeholder="Enter your state" required>
                    </div>

                    <div class="input-box">
                        <span class="details">JobTitle:-</span>
                        <input type="text" name="job_title" placeholder="Enter Job Title" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Company Name:-</span>
                        <input type="text" name="company_name" placeholder="Enter Company Name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Job Type:-</span>
                        <input type="text" name="job_type" placeholder="Enter your Job Type" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Location:-</span>
                        <input type="text" name="location" placeholder="Enter Job Location you preferred" required>
                    </div>

                    <div id="button">
                        <input class="btn btn-success" type="submit" value="Apply Job">
                    </div>
                </div>
            </form>
        </div>
    </nav>
</body>
</html>