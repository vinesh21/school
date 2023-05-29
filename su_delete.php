<?php
include "database.php";
session_start();

$s = "delete from student where STID={$_GET["id"]}";

$db->query($s);

echo "<script>window.open('add_student.php?mes=Student Detail Deleted.' , '_self');</script>"

?>