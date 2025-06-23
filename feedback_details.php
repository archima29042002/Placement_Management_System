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
    <title>Feedback Form</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container2 {
            background-color: transparent;
            box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            width: 550px;
            height: 400px;
            margin-left: 369px;
            margin-top: 65px;
        }

        .title_feedback {
            color: white;
            font-size: 25px;
            margin: 2% 0% 2% 35%;
            font-weight: bold;
        }

        .input-box input {
            height: 30px;
            width: 490px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 16px;
            margin-left: 20px;
            margin-bottom: 3%;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .details2 {
            color: white;
            font-size: 15px;
            margin-left: 20px;
        }

        .user .input-box .details2 {
            display: block;
            font-weight: 900;
            margin-bottom: 5px;
            color: white;
        }

        #submit_button {
            margin-left: 450px;
        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="container2">
        <div class="title_feedback">Feedback Form</div>
        <form action="feedback.php" method="POST">
            <div class="user">

                <div class="input-box">
                    <span class="details2">First Name:-</span>
                    <input type="text" name="first_name" placeholder="Enter your first name" required>
                </div>

                <div class="input-box">
                    <span class="details2">Last Name:-</span>
                    <input type="text" name="last_name" placeholder="Enter your last name" required>
                </div>

                <div class="input-box">
                    <span class="details2">Email:-</span>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-box">
                    <span class="details2">Describe Your Feedback:-</span>
                    <input type="text" name="feedback_description" placeholder="Type here something" required>
                </div>

                <div id="submit_button">
                    <input class="btn btn-success" type="submit" value="Submit">
                </div>

            </div>
        </form>
    </div>
</body>

</html>