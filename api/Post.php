<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";

$title=$_POST["title"];
$entry=$_POST["entry"];
$cat=$_POST["category"];
$un=$_SESSION["User"];

//echo $un;
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql="SELECT blogger_id,blogger_first FROM `blogger_info` WHERE blogger_username='$un'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id=$row["blogger_id"];
$auth=$row["blogger_first"];

$sql = "INSERT INTO `blog_master`(`blogger_id`, `blog_title`, `blog_desc`, `blog_category`,`blog_author`) VALUES ('$id','$title','$entry','$cat','$auth')";

$result = mysqli_query($conn, $sql);

$sql="SELECT blog_id FROM `blog_master` WHERE blog_title='$title'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$bid=$row["blog_id"];
if ($result) 
{
    header('Location: Article_Posted.php?id='.$bid);

}

?>