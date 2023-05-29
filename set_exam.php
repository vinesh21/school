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
    <h3> Set Exam Time Table Details</h3><br>

<?php 

if(isset($_POST["submit"])){  

        $edate=$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];

        $sq ="insert into exam (ENAME,ETYPE,EDATE,SESSION,CLASS,SUB) values('{$_POST["ename"]}','{$_POST["etype"]}','{$edate}','{$_POST["ses"]}','{$_POST["cla"]}','{$_POST["sub"]}')";
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
          <label>Exam Name</label><br>
    <input type ="text" class="input"  name ="ename"><br><br>
          
    <label> Select Term </label><br>
      <select name="etype" required class="input3">
        <option value="">Select </option>
        <option value="I-Term">I-Term </option>
        <option value="II-Term">II-Term</option>
        <option value="II-Term">III-Term</option>
      </select>
   <br><br>
   

<label> Exam Date </label><br>
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

          <div class="rbox">
           <label>Session </label>
               <select name="ses" required class ="input2">
             <option value="">Select</option>
             <option value="FN">FN</option>
             <option value="AN">AN</option>
               </select>
               <br><br>


              <label>Class </label>
               <select name ="cla"  required class ="input3">
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

<label>Subject</label>
 <select name ="sub" required class ="input3">

<?php

               $s="select DISTINCT (SNAME) from sub";

              
               $re = $db->query($s);

               if($re->num_rows>0){

                echo  "<option value=''>Select</option>";

 while($rs=$re->fetch_assoc())
        {
                  echo "<option value ='{$rs["SNAME"]}'>{$rs["SNAME"]}</option>";

         }
}
?>
</select>
<br><br>
<button type ="submit " class ="btn" name="submit"> Add Exam Details </button> 
</form>
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