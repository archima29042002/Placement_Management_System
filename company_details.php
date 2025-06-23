<?php

    require 'connect.php';

    //all data will get selected from  this 'job' table
    $sql = "SELECT * FROM job";

    $result = mysqli_query($conn, $sql);
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

        <div class="content">
            <h3 id="company_details">Company Details</h3>
                <table>
                    <tr class= "table">
                        <th>Job Title</th>
                        <th>Company Name</th>
                        <th>Job Type</th>
                        <th>Application Deadline</th>
                        <th>Skills</th>
                        <th>City</th>
                        <th>Job Description</th>
                        <th></th>
                    </tr>

                    <?php

                        while($info = $result->fetch_assoc())
                        {
                    ?>

                    <tr>
                        <td>
                            <?php echo "{$info['jobTitle']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['companyName']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['jobType']}"; ?>
                        </td>
                        
                        <td>
                        <?php echo "{$info['applicationDeadline']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['skills']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['city']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['jobDescription']}"; ?>
                        </td>

                        <td>
                            <div>
                            <a href =" apply.php">
                                <input button= "apply.php" class="btn btn-success" type="submit" value="Apply">
                            </a>
                            </div>

                        </td>
                    </tr>

                    <?php
                        }
                    ?>

    
                </table>
        </div>

    </nav>
</body>
</html>