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
    <h3 class="text">Welcome 
    <h3> View Exam Time Table Details</h3><br>

    <?php

         if(isset($_GET["mess"])){

            echo "<div class='error'>{$_GET["mess"]}</div>";

         }



?>

        <table border ="1px"><tr>


        <th>S.No</th>
        <th>Class</th>
        <th>Subject</th>
        <th>Exam Name</th>
        <th>Term</th>
        <th>Date</th>
        <th>Session</th>
        <th>Delete</th>
</tr>
  <?php

        $s = "select * from exam ";
        $res = $db->query($s);

        if($res->num_rows>0){

            $i=0;
             while($r=$res->fetch_assoc()){
           

                 $i++;
                
                 echo"<tr>

                 <td>{$i}</td>
                 <td>{$r["CLASS"]}</td>
                 <td>{$r["SUB"]}</td>
                 <td>{$r["ENAME"]}</td>
                 <td>{$r["ETYPE"]}</td>
                 <td>{$r["EDATE"]}</td>
                 <td>{$r["SESSION"]}</td>
                 <td><a href='exam_delete.php?id={$r["EID"]}' class='btnr'>Delete</a><td>
           

                 </tr>";

             }
        }
  
  
?>
</table>
</div>
</div>
</div>  
</div>   
<div class="footer">
<p>copy right &copy; School Manegement System</p>
</footer>

</div>
</body>
</html>