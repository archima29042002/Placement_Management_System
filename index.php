<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProjectWorld Institute of Technology</title>
    <link rel="stylesheet" href="style1.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <form action="login.php" method="POST">
        <nav>
            <label class="logo">ProjectWorld Institute of Technology</label>
            <ul>
                <li><a class="home" href="index.php">Home</a></li>
                <li><a class="home" href="contact.html">Contact us</a></li>
                <li><a class="home" href="feedback_details.php">Feedback</a></li>
                <li>
                    <div class="center">
                        <button id="student-login" class="btn btn-success">Student Login</button>
                    </div>
                </li>
                <li>
                    <div class="center">
                        <button id="admin-login" class="btn btn-success">Admin Login</button>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="popup">
            <div class="close-btn">&times;</div>
            <div class="form">
                <h2>Login</h2>
                    <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                <div class="form-element">
                    <label for="username">Username:-</label>
                    <input type="text" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-element">
                    <label for="password">Password:-</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <div>
                    <button class="btn btn-success button">Log In</button>
                </div>
            </div>
        </div>
    </form>

    <div class= "section1">
        <label class="img_text1">Placement Management System</label>
        <p class="img_text2">We are here to build your Skills and Career with our Driven Passion and Reality.</p>
        <img class= "main_img" src="Pictures/pic2.jpg">
    </div>

    <!-- FOOTER -->
    <footer>

        <div class="foot-panel2">
            <ul>
                <p>Navigation</p>
                <a class="footer" href="index.php">Home</a>
                <a class="footer" href="contact.html">Contact Us</a>
                <a class="footer">Student Login</a>
                <a class="footer">Admin Login</a>
                <a class="footer" href="feedback_details.php">Feedback</a>
            </ul>
            <ul>
                <p>Members</p>
                <a class="footer">Placement Support</a>
                <a class="footer">Faculty Support</a>
                <a class="footer">Registered Company</a>
                <a class="footer">Training</a>
            </ul>
            <ul>
                <p>Get in Touch</p>
                <p class="get_in_touch">Kolkata</p>
                <p class="get_in_touch">West Bengal, India</p>
                <p class="get_in_touch">9876543210</p>
                <p class="get_in_touch">projectworld@gmail.com</p>
            </ul>
        </div>

        <div class="foot-panel4">
            <div class="pages">
                <a>Conditions of use</a>
                <a>Privacy Notice</a>
                <a>Consumer Health Data Privacy Disclosure</a>
                <a> Your Ads Privacy Choices</a>
            </div>
            <div class="copyright">
                © 1996-2024, Amazon.com, Inc. or its affiliates
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>