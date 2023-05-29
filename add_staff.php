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
<img src="img/g.png"  style="margin-left :102px;" width="80%" class="sha">

    <div id="section">
    <?php include "sidebar.php"?>

    <div id="content">
    <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?> </h3><br><hr><br>
    <h3> Add Staff Details</h3><br><br>
<?php
   if(isset($_POST["submit"])){

$sq = "insert into staff(TNAME,TPASS,QUL,SAL) values('{$_POST["sname"]}','1234','{$_POST["qual"]}', '{$_POST["sal"]}')";
 if($db->query($sq)){
     echo "<div class ='success' >Insert success</div>";
   }       
else{
    echo  "<div class ='error'>Insert failed</div>";
}
}
?>
<form method ="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

    <label>Staff Name</label><br>
    <input type ="text" name ="sname" required class ="input"><br><br>
          
    <label>Qualification</label><br>
    <input type="text" name ="qual" required class ="input"><br><br>

    <label>Salary </label><br>
    <input type="text" name ="sal"  required class ="input"><br><br>

    <button type ="submit " class ="btn" name="submit"> Add Staff Details</button>

</form>
</div>  
</div>   
<div class="footer">
<p>copy right &copy; School Manegement System</p>
</footer>

</div>
</body>
</html>