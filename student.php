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
<img src="img/g.png"  style="margin-left :120px;" width="80%" class="sha">

    <div id="section">
    <?php include "sidebar.php"?>

    <div id="content">
    <h3 class="text">Welcome <?php echo  $_SESSION["ANAME"]; ?> </h3><br><hr><br>
    <h3> View Student Details</h3><br><br><br>
        
           <form id="frm" autocomplete="off">
            <input type="text" id="text" class="input">
           </form>     

           <div id="box"></div>
           

</div>
</div>   
<div class="footer">
<p>copy right &copy; School Manegement System</p>
</footer>


<script>
       $(document).ready(function(){
        $("#txt").keyup(function(){
           var txt=$("#txt").val();
           if(txt!="")
           {
              $.post("search.php",{s:txt},function(data){
                 $("#box").html(data);
              });
           }
        });
      });

       </script>

</div>
</body>
</html>