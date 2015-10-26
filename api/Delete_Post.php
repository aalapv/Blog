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


$sql = "SELECT `blog_is_active` FROM `blog_master` where blog_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$active=$row["blog_is_active"];
if($result)
{
	if($active==0)
	{
		$sql1 = "UPDATE `blog_master` SET `blog_is_active`= 1 where blog_id='$id'";
        $result1 = mysqli_query($conn, $sql1);
	}
	else if($active==1)
	{
		$sql1 = "UPDATE `blog_master` SET `blog_is_active`= 0 where blog_id='$id'";
        $result1 = mysqli_query($conn, $sql1);

	}

}

   header('Location: Deleted.php');

    

?>