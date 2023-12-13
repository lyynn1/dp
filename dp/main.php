<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet"  href="main.css" >
        <script>
         </script>
        <title>
            Main Page
        </title>
    </head>

<body>
    <div class="span" id="header">
            <div id="dropdown-menu">
                <span>Menu</span>
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

            <div class="welcome">
                <div class="text"> 
                    <?php
                        echo '<p>';
                        echo "Welcome ";
                        echo '</p>';
                    ?>
                </div>
                <button class="logout-button" style="display: inline-block;" id="button" onclick="logout()">Logout</button>
            </div>

        </div>
        <div class="main">
            <img src="IMG_3936.JPG"width=150;>
            <h1> Welcome to my page!</h1>
            <h2> My name is <span2>Lynn Abdallah</span2></h2>
        </div>
        
        <div class="info">
            
            <p>As an ambitious and high-achieving computer science university student,
            <br>I am driven by an insatiable curiosity and an unwavering commitment to 
            <br>excellence. My journey in the field of computer science has been 
            <br>characterized by a relentless pursuit of knowledge and a passion for 
            <br>problem-solving. With each passing semester, I eagerly embrace new challenges
            <br>and actively seek opportunities for personal and intellectual growth.
            <br>If interested check my socials in the link secton!</p>
            </div>    
            <div class="picture">

            </div>  
        </div> 

        <script>
            function logout () {
                location.href = "index.php";
            }
        </script>
        
        

    </body>

</html>