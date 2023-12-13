<?php
    session_start();
    }
?>
<html>
    <head>
        <title>
            Contacts
        </title>
        <link rel="stylesheet" href="contacts.css">
    </head>
    <body>
        <div class="row">
            <div id="dropdown-menu">
                <span>MENU</span>
                <div class="dropdown-content">
                <ul>
                        <a href="main.php"> 
                            <li>Main</li>
                        </a>
                        <a href="cv.php">
                            <li>Cv</li>   
                        </a>
                        <a href="gallery.php">
                            <li>Gallery</li>   
                        </a>
                        <a href="contacts.php">
                            <li>Contacts</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="welcome" style="float: right;">
                <div class="text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome ";
                        echo '</p>';
                    ?>
                </div>
                <button class="logout-button" style="display: inline-block;" id="button" onclick="logout()">Logout</button>
                <script>
            function logout () {
                location.href = "index.php";
            }
        </script>
            </div>
        </div>
        <h1>
            Listed Below Are My Contacts!
        </h1>
        <h2>
            <a href="https://www.instagram.com/lynnabdalllah/">
                <img src="insta.png" width="200">
                
            </a>
            <a href="https://www.linkedin.com/in/lynn-abdallah-60a613275/">
                <img src="linkedin.png" width="200" > 
            </a>   
        </h2>
    </body>
