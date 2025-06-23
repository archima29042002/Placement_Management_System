<?php

    require 'connect.php';

    //all data will get selected from  this 'registration' table
    $sql = "SELECT * FROM registration";

    //we have all the data from job table
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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

        <div class="content">
            <h3 id="student_details">Student Eligibility Criteria</h3>
                <table>
                    <tr class= "table">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOB</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Gender</th>
                        <th>PG Marks</th>
                        <th>Graduation Marks</th>
                        <th>HS Marks</th>
                        <th>Secondary Marks</th>
                    </tr>

                    <?php

                        while($info = $result->fetch_assoc())
                        {
                    ?>

                    <tr>
                        <td>
                            <?php echo "{$info['firstName']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['lastName']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['dob']}"; ?>
                        </td>
                        
                        <td>
                        <?php echo "{$info['email']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['phoneNo']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['address']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['state']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['gender']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['pgMarks']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['gMarks']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['hsMarks']}"; ?>
                        </td>

                        <td>
                        <?php echo "{$info['sMarks']}"; ?>
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