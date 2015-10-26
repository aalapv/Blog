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
 
 $sql = "UPDATE `blogger_info` SET `approval`=1 where blogger_id='$id'";
 $result = mysqli_query($conn, $sql);

$sql = "SELECT `blogger_is_active` FROM `blogger_info` where blogger_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$active=$row["blogger_is_active"];
if($result)
{
		$sql1 = "UPDATE `blogger_info` SET `blogger_is_active`= 1 where blogger_id='$id'";
        $result1 = mysqli_query($conn, $sql1);

}

   header('Location: approval.php');

    

?>