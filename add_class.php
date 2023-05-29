<?php include "database.php";
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

        <?php include "sidebar.php" ?>
        <div id="content">

     <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?> </h3><br><hr><br>
            

<?php
            // echo isset($_POST["submit"]);
            if (isset($_POST["submit"])) {
                $cname = $_POST['cname'];
                $csec = $_POST['sec'];
                $sq = "INSERT INTO class (CNAME, CSEC) VALUES ('$cname', '$csec')";
                // $sq = "SHOW TABLES LIKE 'class'";
                // print_r($db->query($sq));
                if ($db->query($sq)) {
                    echo "<div class'success'>Insert Class Success..</div>";
                } else {
                    echo "<div class 'error'>Insert Failed</div>";
                }
            }
            ?>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">




            <label> Add Class Name </label><br>
               <select name="cname" required class="input2">
                    <option value="">Select</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                    <option value="X">X</option>
             </select><br><br>

                <label>Section</label><br>

                <select name="sec" required class="input2">

                    <option value="">Select</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select><br>

                <button type="submit" class="btn" name="submit">Add Class Details</button>

</form>
        
</div>           
        <div class="tbox">

            <h3>Class Details</h3>

            <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }


?>
            <table border= "1px">
                <tr>
                    <th>S.No</th>
                    <th>Class Name</th>
                    <th>Section</th>
                    <th>Delete</th>
                </tr>

                <?php
                $s = "SELECT * from class ";

                $res = $db->query($s);

               /* $res = $db->query('SELECT * from class');*/

                if ($res->num_rows > 0) {
                    $i = 0;
                    while ($r = $res->fetch_assoc()) {
                     $i++;


             echo "<tr>
                
            <td>{$i}</td>
            <td>{$r["CNAME"]}</td>
            <td>{$r["CSEC"]}</td>
            <td><a href ='delete.php?id={$r["CID"]}' class='btnr'>Delete</td>
                
            </tr>";
}
}
?>
            </table>
</div>
</div>
<div class="footer">
<p>copy right &copy; School Manegement System</p> </footer>
</div>
</body>
</html>