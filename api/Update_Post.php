<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$id=$_GET["id"];

$title=$_POST["title"];
$entry=$_POST["entry"];
$cat=$_POST["category"];
//$un=$_SESSION["User"];

//echo $un;
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "UPDATE `blog_master` SET `blog_title`='$title',`blog_desc`='$entry',`blog_category`='$cat' WHERE blog_id=$id;";

$result = mysqli_query($conn, $sql);

$sql = "UPDATE `blog_master` SET `updated_date`= now() where blog_id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) 
{
    header('Location: Article_Updated.php');

}

?>