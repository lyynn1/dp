<html>

<head>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h2>Login to your account</h2>

            <form id="login-form" name="login-form" method="post" action="login.php" onsubmit="return login()">
                <div class="input-group">
                    <div class="input-field">
                        <label for="un">Username</label>
                        <br>
                        <div class="input-cont">
                            <input id="un" type="text" name="username" class="input-txt">
                        </div>
                    </div>

                    <div class="input-field">
                        <label for="pass">Password</label>
                        <br>
                        <div class="input-cont">
                            <input id="pass" type="password" name="password" class="input-txt">
                        </div>
                    </div>
                    <input type="submit" value="LOG IN" class="button" style="margin: 15px auto 0px;">
                    <div>
                         <a href="sign.php" >
                             <p>If you don't have an account, Sign up here!</p>
                         </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function login() {
            const username = document.getElementsByName('username')[0].value;
            const password = document.getElementsByName('password')[0].value;

            if (username === "" || password === "") {
                alert("Please fill out all required fields");
                return false;
            }

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'login.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        window.location.href = 'main.php';
                    } else {
                        alert(response.message || "Invalid credentials. Please try again.");
                    }
                }
            };

            const data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
            xhr.send(data);

            return false;
        }
    </script>
</body>

</html>
