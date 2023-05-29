<?php
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
    <h3 class="text">Welcome <?php echo $_SESSION["TNAME"]?> </h3>
    <h3 class="text">Teacher Information<h3> <br><br>

    <form method ="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

    <label>Phone No</label><br>
    <input type ="text" name ="" required class ="input"><br><br>
          
    <label>Email </label><br>
    <input type="text" name ="" required class ="input"><br><br>

    <label>Address</Address></label><br>
    <input type="text" name =""  required class ="input"><br><br>

    <button type ="submit " class ="btn" name="submit"> Add Staff Details</button>


    <table border="1px">
<tr>

<th>S.No</th><br>
<th>sub name</th><br>
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
</form>
</div>
</div>
     

<div class="footer">
<p>copy right &copy; School Manegement System</p>
    </footer>
</div>
</body>
</html>