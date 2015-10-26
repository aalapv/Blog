<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$bid=$_GET["id"];


$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT `blog_detail_image` FROM `blog_detail` WHERE blog_id=$bid";

$result1 = mysqli_query($conn, $sql1);
$row=mysqli_fetch_assoc($result1);

if ($result1) 
{
	
   echo '<img src="'.$row["blog_detail_image"].'"height=60% width=30%>';
}

else
	echo"Image Not Available.";




?>