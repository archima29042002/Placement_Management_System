<?php

    require 'connect.php';

    //all data will get selected from  this 'apply_details' table
    $sql = "SELECT * FROM apply_details";

    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin1.css">

    <style>
        .content2 {
                margin: 25px 0px 0px 40px;
                width: 93.5%;
                background-color: rgba(60, 117, 139, 0.5);
                box-shadow: 2px 2px 5px 5px rgba(26, 25, 33, 0.15);
                border-radius: 15px;
        }
    </style>

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

        <div class="content2">
            <h3 id="student_details">Student Eligibility Criteria</h3>
                <table>
                    <tr class= "table">
                        <th>Student Roll</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Job Title</th>
                        <th>Company Name</th>
                        <th>Job Type</th>
                        <th>Location</th>
                    </tr>

                    <?php

                        while($info = $result->fetch_assoc())
                        {
                    ?>

                    <tr>
                        <td>
                            <?php echo "{$info['studentRoll']}"; ?>
                        </td>

                        <td>
                            <?php echo "{$info['firstName']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['lastName']}"; ?>
                        </td>
                        
                        <td>
                        <?php echo "{$info['email']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['phoneNo']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['gender']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['address']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['state']}"; ?>
                        </td>

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
                        <?php echo "{$info['location']}"; ?>
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