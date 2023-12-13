<?php
    session_start();

?>
<html>
    <head>
        <title>
            Lynn Abdallah Cv
        </title>
        <link rel="stylesheet" href="cv.css">
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
                            <li>CV</li>   
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

        <div class="main">
            <div class="left">
                <h1 class="name">Lynn Abdallah</h1>
                <div class="image">
                    <img src="IMG_3936.JPG" width="200">
                <br>
                <p style="font-size: larger; ">
                    Computer Science Senior
                </p>
        </div>
        <p class="icons"><i class="box phone">+961 70090836</i></p>
        <p class="icons"><i class="box email">lynnabdallahh@gmail.com</i></p>
        <p class="icons"><i class="box address">Hamra-Beirut</i></p>
        <p class="icons"><i class="box nationality">American-Lebanese</i></p>

        <h2>Languages</h2>
        <p class="lang">
            English
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3"></span>
            <span class="circle4"></span>
            <span class="circle5"></span>
        </p>
        <p class="lang">
            Arabic
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3"></span>
            <span class="circle4"></span>
            <span class="circle5"></span>
        </p>
        <p class="lang">
            French
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3" ></span>
            <span class="circle4" ></span>
            <span class="circle5" style="background: transparent; border: 1px solid white;"></span>
        </p>
        <p class="lang">
            Spanish
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3" style="background: transparent; border: 1px solid white;"></span>
            <span class="circle4" style="background: transparent; border: 1px solid white;"></span>
            <span class="circle5" style="background: transparent; border: 1px solid white;"></span>
        </p>
        


            </div>
             <div class="right">
                <div class="content">
                    <h3>Education</h3>
                    <div class="inner">
                        <h4>Undergraduate Degree in Computer Science</h4>
                        <p>Lebanese American University -Fall 2021 - Present </p>
                        <h4>Lebanese Baccaluareate, General Science Path</h4>
                        <p>Saint Joseph highschool-Antonines Sisters School-Class of 2021-Graduated with honors
                        </p>
                    </div>
                    <h3>Exprerince</h3>
                    <div class="inner">
                        <h4>Internship | Platform life science solutions</h4>
                        <p>Platform life science solutions is a software development firm that enables communication between healthcare providers, payers, regulatory bodies and citizen.</p>
                        <h4>Supervisor Over Social Relations Officer | Icademy</h4>
                        <p>Icademy is a high school student-run, non-profit organization aiming to provide free education to students to help them with their academical achievements.</p>
                        <h4>Logistics & Operations Coordinator | LAUSM</h4>
                        <p>The logistics and operations team takes care of technical issues as well as maintains and organizes each session, mock and final mock.</p>

                    </div>
                    <h3>Skills</h3>
                    <div class="inner">
                        
                        <div class="box2">
                            <img src="python.png" width="50">
                            <p>Python</p>
                        </div>
                        <div class="box2">
                            <img src="c.png" width="50">
                            <p>C</p>
                        </div>
                        <div class="box2">
                            <img src="mysql.png" width="50">
                            <p>MySql</p>
                        </div>
                        <div class="box2">
                            <img src="java.png" width="50">
                            <p>Java</p>
                        </div>
                        
                    </div>
                </div>

            </div>
            
        </div><div class="clearfix"></div>
    </body>
