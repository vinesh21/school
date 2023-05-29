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
    <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?> </h3><br><hr>
    <h3> Add Subject Name </h3><br>
<?php
 if(isset($_POST["submit"])){
    $sq = "insert into sub(SNAME) values ('{$_POST["sname"]}')";

    if ($db->query($sq)){

    echo " <div class='success'>Insert Add Subject Success....</div>";
    }
    else{
    echo "<div class ='error'>Insert Failed</div>";
    }
    }
    ?>
        
    <form method="post" action ="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Subject Name </label><br>
        <input type="text" name="sname" required class="input">
        <button type="submit" class ="btn" name ="submit">Add Subject Details </button>
            
</form>

</div>

<div class ="tbox">
   <h3>Subject Details </h3>

   <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
?>
<table border="1px">
<tr>

<th>S.No</th>
<th>sub name</th>
<th>Delete</th>

</tr>

<?php
  $s = "select * from sub";
  $res = $db->query($s);
 if($res->num_rows>0){
 $i=0;

while($r=$res->fetch_assoc()){
    $i++;

  echo "<tr>
        <td>{$i}</td>
        <td>{$r["SNAME"]}</td>
        <td><a href ='sub_delete.php?id={$r["SID"]}' class ='btnr'>Delete</td>
       </tr>";
}
}
?>
</table>
</div> 
</div>  
<div class="footer">
<p>copy right &copy; School Manegement System</p>
</footer>

</div>
</body>
</html>