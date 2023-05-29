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
<img src="img/g.png"  style="margin-left :120px;" width="80%"  class="sha">

    <div id="section">
    <?php include "sidebar.php"?>

    <div id="content">
    <h3 class="text">Welcome <?php echo  $_SESSION["ANAME"]; ?> </h3><br><hr><br>
    <h3>View Attendance Details</h3><br>


    <?php

 if(isset($_GET["mess"]))   {

      echo "<div  class ='error'> {$_GET["mess"]}</div>";
      
 }


?>

    <table border="1px"><tr>


    <th>S.No</th>
    <th>Date</th>
    <th>Student Name</th>
    <th>Roll Number</th>
    <th>class</th>
    <th>sec</th>
    <th>attendance</th>

</tr>



<?php 

$s = "select * from attendance";

$res =$db->query($s);

if($res->num_rows>0) {

    $i= 0;
  while($r = $res->fetch_assoc()){
            $i++;


    echo "<tr>
          
            <td>{$i}</td>
            <td>{$r["ADATE"]}</td>
            <td>{$r["ANAME"]}</td>
            <td>{$r["AROLL"]}</td>
            <td>{$r["ACLASS"]}</td>
            <td>{$r["ASEC"]}</td>
            <td>{$r["ATTEND"]}</td>
            <td><a href='att.delete.php?id={$r["AID"]}' class='btnr'>Delete</a></td>


        </tr>";
}
}

?>


</table>
</div>  
</div>   
<div class="footer">
<p>copy right &copy; School Manegement System</p></footer>
</div>
</body>
</html>