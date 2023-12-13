<?php
    session_start();
    
?>
<html>
    <head>
        <title>
            Image Gallery
        </title>
        <link rel="stylesheet" href="gallery.css">
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
            </div>

        </div>
        </div>
        <div class="box">
            <h1>Hello October!</h1>
            <div class="pictures">
                <div class="pic">
                    <label for="pic1">
                        <img src="pic1.jpeg" alt="Image 1">
                    </label>
                    <input type="checkbox" id="pic1" class="modal-toggle">
                    <div class="modal">
                        <label for="pic1" class="close-btn">&times;</label>
                        <img src="pic1.jpeg" alt="Image 1">
                    </div>
                </div>
            
                <div class="pic">
                    <label for="pic2">
                        <img src="pic2.jpeg" alt="Image 2">
                    </label>
                    <input type="checkbox" id="pic2" class="modal-toggle">
                    <div class="modal">
                        <label for="pic2" class="close-btn">&times;</label>
                        <img src="pic2.jpeg" alt="Image 2">
                    </div>
                </div>
                <div class="pic">
                    <label for="pic3">
                        <img src="pic3.jpeg" alt="Image 3">
                    </label>
                    <input type="checkbox" id="pic3" class="modal-toggle">
                    <div class="modal">
                        <label for="pic3" class="close-btn">&times;</label>
                        <img src="pic3.jpeg" alt="Image 3">
                    </div>
                </div>    

                <div class="pic">
                    <label for="pic4">
                        <img src="pic4.jpeg" alt="Image 4">
                    </label>
                    <input type="checkbox" id="pic4" class="modal-toggle">
                    <div class="modal">
                        <label for="pic4" class="close-btn">&times;</label>
                        <img src="pic4.jpeg" alt="Image 4">
                    </div>
                </div>    
                <div class="pic">
                    <label for="pic5">
                        <img src="pic5.jpeg" alt="Image 5">
                    </label>
                    <input type="checkbox" id="pic5" class="modal-toggle">
                    <div class="modal">
                        <label for="pic5" class="close-btn">&times;</label>
                        <img src="pic5.jpeg" alt="Image 5">
                    </div>
                </div>    
                <div class="pic">
                    <label for="pic6">
                        <img src="pic6.jpeg" alt="Image 6">
                    </label>
                    <input type="checkbox" id="pic6" class="modal-toggle">
                    <div class="modal">
                        <label for="pic6" class="close-btn">&times;</label>
                        <img src="pic6.jpeg" alt="Image 6">
                    </div>
                </div>
            
           
        </div>
        <div class="gallery">
        
    </div>

    <script>
        function logout() {
            location.href = "index.php";
        }

        function toggleDropdown() {
            var dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        }

        window.onclick = function(event) {
            if (!event.target.matches('.icon')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
</body>
</html>
                
                
               
          
        
    </body>
   
</html>    
