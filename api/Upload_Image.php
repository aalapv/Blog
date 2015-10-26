<?php
session_start();
$id=$_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$target = "../images/";
$target = $target . basename( $_FILES['Filename']['name']);

$Filename=basename( $_FILES['Filename']['name']);


if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
    echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql="INSERT INTO `blog_detail`(`blog_id`,`blog_detail_image`) VALUES('$id','$target')";
$result = mysqli_query($conn, $sql);


} 

else {
    echo "Sorry, there was a problem uploading your file.";
}



?>