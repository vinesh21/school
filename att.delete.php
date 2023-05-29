<?php

include "database.php";
session_start();

$s = "delete from attendance where AID={$_GET["id"]}";

$db->query ($s);

echo "<script>window.open('view_attendance.php?mess=Data Deleted......', '_self');</script>";

?>