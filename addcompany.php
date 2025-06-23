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
    <title>Add New Company</title>
    <link rel="stylesheet" href="admin1.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <label>Admin Dashboard</label>
        <ul>
            <li>
                <a href="addcompany.php">Add Company</a>
            </li>
            <li>
                <a href="student_details.php">Student Profiles</a>
            </li>
            <li>
                <a href="applicant.php">Applicant</a>
            </li>
            <div class="logout">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
        </ul>

        <div class="container">
            <div class="title">Add Job</div>
            <form action="company.php" method="POST">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Job Title:-</span>
                        <input type="text" name="job_title" placeholder="Enter new job" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Company Name:-</span>
                        <input type="text" name="company_name" placeholder="Enter the Company Name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Job Type:-</span>
                        <input type="text" name="job_type" placeholder="Write the job type" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Application Deadline:-</span>
                        <input type="date" name="application_deadline" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Skills Required:-</span>
                        <input type="text" name="skills_required" placeholder="Required Skills" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Location:-</span>
                        <input type="text" name="city" placeholder="Enter location" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Job Description:-</span>
                        <input type="text" name="job_description" placeholder="Write the job description" required>
                    </div>

                    <div id="button">
                        <input class="btn btn-success" type="submit" value="Post Job">
                    </div>

                </div>
            </form>
        </div>

    </nav>
</body>
</html>
