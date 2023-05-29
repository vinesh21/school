<?php include "database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome To My School Manegement System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="back">
<?php include "navbar.php" ?>
    <img src="img/b.jpeg" width="800">

<div class ="login">
 <h1 class="heading">Admin Login</h1>
 <div class="log">
  <form method="POST" action="">
    
   <label>Username</label><br>
   <input type="text" name="aname" required class="input"><br><br>
   <label>Password</label><br>
   <input type="Password" name="apass" required class="input"><br>
   <button type="submit" class="btn" name="login">Login Here</button>

   <?php
if (isset($_POST["login"])){

$sql = "SELECT * from admin where ANAME ='{$_POST["aname"]}'  and APASS ='{$_POST["apass"]}'";

       $res = $db->query($sql);

        if($res->num_rows>0){
    
        $ro = $res->fetch_assoc();

  $_SESSION["AID"] = $ro["AID"];
  $_SESSION["ANAME"] = $ro["ANAME"];
       echo " <script>window.open('admin_home.php' ,'_self');</script>";
} 
else
{
 echo "<div class='error'>Invalid Username and Password </div>"; }
}
?>

</form>
</div>
</div>
<div class="footer">
<footer><p>copy right &copy; School Manegement System</p></footer>
</div>
</body>
</html>