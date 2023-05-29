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
    <h3> Add Attendance Details</h3><br>

<?php 

if(isset($_POST["submit"])){  

        $Adate=$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];

 $sq ="insert into attendance(ADATE,ANAME,AROLL,ACLASS,ASEC,ATTEND) values('{$Adate}','{$_POST["aname"]}','{$_POST["aroll"]}','{$_POST["aclass"]}','{$_POST["asec"]}','{$_POST["ATTEND"]}')";
        if($db->query($sq))
        {
          echo "<div class ='success' >Insert Success</div>";
        }  
        else
        {
            echo"<div class='error'> Insert Failed</div>";
        }
      }
      ?>
<form method ="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        
          <div class ="lbox">
          <label>Student Name</label><br>
    <input type ="text" class="input"  name ="aname"><br><br>

  

    <label>ROll Number</label><br>
    <input type ="number" class="input"  name ="aroll"><br><br>

  
          
    <label> Attendance</label><br>
      <select name="ATTEND" required class="input3">
        <option value="">Select </option>
        <option value="Present">Present </option>
        <option value="Absent">Absent</option>
        
      </select>
   <br><br>
          
   <div class="rbox"
<label> Exam Date </label>
<select name ="da" class ="input5">

        <option values="">Date</option>
        <option values="1">1</option>
        <option values="2">2</option>
        <option values="3">3</option>
        <option values="4">4</option>
        <option values="5">5</option>
        <option values="6">6</option>
        <option values="7">7</option>
        <option values="8">8</option>
        <option values="9">9</option>
        <option values="10">10</option>
        <option values="11">11</option>
        <option values="12">12</option>
        <option values="13">13</option>
        <option values="14">14</option>
        <option values="15">15</option>
        <option values="16">16</option>
        <option values="17">17</option>
        <option values="18">18</option>
        <option values="19">19</option>
        <option values="20">20</option>
        <option values="21">21</option>
        <option values="22">22</option>
        <option values="23">23</option>
        <option values="24">24</option>
        <option values="25">25</option>
        <option values="26">26</option>
        <option values="27">27</option>
        <option values="28">28</option>
        <option values="29">29</option>
        <option values="30">30</option>
        <option values="31">31</option>
</select>

 <select name="mo" class ="input5">
        <option> Month</option>
        <option value="01">Jan</option>
        <option value="02">Feb</option>
        <option value="03">Mar</option>
        <option value="04">Apr</option>
        <option value="05">may</option>
        <option value="06">jun</option>
        <option value="07">Jul</option>
        <option value="08">Aug</option>
        <option value="09">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
   </select>  
   
   <select name="ye"  class="input5">
   <option value="">Select Year></option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
        <option value="2021">2022</option>
        <option value="2020">2020</option>
   </select>
   <br><br>

        
          

              <label>Class </label>
               <select name ="aclass"  required class ="input3">
<?php
      $sl="select DISTINCT(CNAME) from class";
      $r=$db->query($sl);

      if($r->num_rows>0) {

         echo "<option value=''>select</option>";
         while($ro=$r->fetch_assoc()){

      echo"<option value='{$ro["CNAME"]}',>{$ro["CNAME"]}</option>";

}
}
?>
</select>
<br><br>     
<label>Section</label><br>

<select name="asec" required class="input2">

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


<br><br>
<button type ="submit " class ="btn" name="submit"> Add Attendance Details </button> 

</div>
</div>
</div>
</div>
</div> 

<div class="footer">
<p>copy right &copy; School Manegement System</p>
</footer>
</form>
</div>
</body>
</html>