<?php
$host="your_host";
$dbuser="your_username";
$dbpass="your_password";
$dbname="your_db_name";

$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
