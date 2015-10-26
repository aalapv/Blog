<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";

$fn=$_POST["first_name"];
$ln=$_POST["last_name"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$mob=$_POST["mobile"];
$email=$_POST["email"];
$pwd=$_POST["password"];
$md=md5($pwd);


$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `blogger_info`(`blogger_first`, `blogger_last`, `blogger_DOB`, `blogger_gender`, `blogger_mobile`, `blogger_username`, `blogger_password`) VALUES ('$fn','$ln','$dob','$gender','$mob','$email','$md')";

$result = mysqli_query($conn, $sql);


if ($result) 
{
	
    $sql1 = "UPDATE `blogger_info` SET `blogger_end_date`= DATE_ADD(NOW(), INTERVAL 1 year)";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ..\views\Login.html');

}

?>