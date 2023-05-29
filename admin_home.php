<?php

include "database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Welcome to School Manegement System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php include "navbar.php" ?>
    <img src="img/g.png"  style="margin-left :120px;"  width="80%" class="sha">

    <div id="section">
    <?php include "sidebar.php"?>
    <div id="content">
           <h3 class="text">Welcome <?php echo  $_SESSION["ANAME"]; ?> </h3><br><hr><br>
           <h3>School information</h3><br>
           <img src="img/f.jpg" class="imgs">

        <p class="para">School Manegement System is a complete school manegement software manegement software designed to 
            automate a school's diverse operations from classes,exams to school  events calendar.
        </p>
        <p class="para">
             This school  software has a powerful online community to bring parents, teachers and students on a common
            interactive platform. it is a paperless office automation solution for today's modern schools. the school
            Manegement System provides the facility to carry out all day to day activities of the school.
</p>

</div>
</div>
     <div class="footer">
    <p>copy right &copy; School Manegement System</p>
    </footer>

</div>
</body>
</html>