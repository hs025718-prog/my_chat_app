<?php
$host = "sql308.infinityfree.com";
$user = "if0_42154306";
$pass = "hemant2126";
$db = "if0_42154306_omchat";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("कनेक्शन फेल हो गया: " . mysqli_connect_error());
}
?>