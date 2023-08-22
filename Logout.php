<?php  
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:project12.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="Logout1.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
</head>
<body>
        <div class="container"> 
            <ion-icon name="contact"></ion-icon>
            <ul> 
                <li> 
                    <a href="#"> HOME</a>
                </li>
                <li> 
                    <a href="#">ABOUT</a>
                </li>
                <li> 
                    <a href="#"> SERVICE</a>
                </li><br>
                <li> 
                    <a href="#"> REPAIR</a>
                </li>
                <li> 
                    <a href="#"> CONTACT</a>
                </li>
            </ul>
            <form method="POST">
                <button name="logout">Logout</button>
        
            </form>
        
            
        </div>
        <div class="box">
            <div class="box1">
                <img src="hacker3.jpg" alt="">
            
            </div>
            <div class="box1"><br>
                <h3>Kanhaiya Kumar</h3>
                <h1>I'm a Web</h1>
                <span> Devloper</span><br><br><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odit corrupti, dolor voluptate placeat nemo, magnam quas facere recusandae quisquam perferendis 
                necessitatibus libero facilis illo sapiente quasi 
                iusto officiis numquam!</p><br><br>
                <button class="btn">DOWNLOAD CV</button>

            </div>
           


        </div>
    
       


    </div>
     <?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: project12.php");
    }
    ?>
</body>
</html>