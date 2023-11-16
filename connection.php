<!Doctype html>
<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="Anubh@8429v";
$dbname="bbms";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Connection failed: ".mysqli_connect_error());
}
?>
