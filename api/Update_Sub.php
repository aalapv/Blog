<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$id=$_GET["id"];

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE `blogger_info` SET `blogger_end_date`= DATE_ADD(`blogger_end_date`, INTERVAL 1 year) where blogger_id='$id'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `blogger_info` SET `blogger_updated_date`= now() where blogger_id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) 
{
    header('Location: user_info.php?id='.$id);
}
    

?>