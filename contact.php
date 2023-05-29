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

 <h1 class="heading">contact us </h1><br>
 <div class="log2">
  <form method="POST" action="">
    
   <label>Name</label><br>
   <input type="text" name="aname" required class="input"><br>
   <label>Email</label><br>
   <input type="text" name="aname" required class="input"><br>
   <label>Message</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">


</form>
</div>
</div>
<div class="footer">
<footer><p>copy right &copy; School Manegement System</p></footer>
</div>
</body>
</html>