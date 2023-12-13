<?php
    session_start();
    session_unset();
    session_destroy();
?>
<html>
<head>
    <link rel="stylesheet" href="signup.css"> 
    <script>
        function Signup() {
            const username = document.getElementsByName('username')[0].value;
            const firstname = document.getElementsByName('firstname')[0].value;
            const lastname = document.getElementsByName('lastname')[0].value;
            const password = document.getElementsByName('password')[0].value;
            const confirmPassword = document.getElementsByName('confirmpassword')[0].value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
             document.getElementById('signup-form').submit();

            
        }
    </script>
    <title>Main Page</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Sign up to create your account</h2>
            <form id="signup-form" name="signup-form" method="post" action="signup.php">
                <div class="input-group">
                    <div class="input-field">
                        <label for="un">Username:</label>
                        <br>
                        <input type="text" id="un" name="username">
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="fn">First Name:</label>
                        <input type="text" id="fn" name="firstname">
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="ln">Last Name:</label>
                        <input type="text" id="ln" name="lastname">
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="pass">Password:</label>
                        <input type="text" id="pass" name="password">
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="confpass">Confirm Password:</label>
                        <input type="text" id="confpass" name="confirmpassword">
                        <br>
                    </div>
                    <div>
                        <label for="dob">Date of Birth</label>
                        <br><br>
                        <input type="date" name="DateOfBirth">
                        <br>
                    </div>
                    <div>
                        <br>
                        <label for="sex"></label>
                        <input type="radio" name="sex" id="male" value="m">
                        <label for="male" class="radio male">
                            <span>Male</span>
                        </label>
                        <input type="radio" name="sex" checked id="female" value="f">
                        <label for="female" class="radio female">
                            <span>Female</span>
                        </label>
                    </div>
                    <br>
                    <input type="button" value="Sign Up" class="button" onclick="Signup()" style="margin: 15px auto 0px;">
                    <div>
                        <a href="index.php">
                            <p>if you have an account, Log in here</p>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
