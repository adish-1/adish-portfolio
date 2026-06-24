<?php
$host="sql100.infinityfree.com";
$dbuser="if0_41420726";
$dbpass="LTp2R8ZmOJCFda9";
$dbname="if0_41420726_portfolio";

$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>