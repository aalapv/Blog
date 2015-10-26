<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";

$conn = mysqli_connect($servername, $username, $password,$dbname);
echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `blog_master`  WHERE blog_is_active=1 ORDER BY `creation_date` DESC LIMIT 5";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
    	$id=$row["blog_id"];
    	echo '<p><h2><strong><a href="api\Display_One.php?id='.$id.'">'.$row["blog_title"].'</strong></a>';
        echo '<h5>'."Posted at ".$row["creation_date"]." by ".'<a href="api\user_posts.php?id='.$row["blogger_id"].'">'.$row["blog_author"].'</a>'." in ".'<a href="api\cat_posts.php?cat='.$row["blog_category"].'">'.$row["blog_category"].'</a>';
        echo '<h4>'.$row["blog_desc"].'<br>';
        if($_SESSION["User"]=='admin@xyz.com')
        	
        	{
        		echo '<ul class="list-inline">';
 	            echo '<li><a class="btn btn-default btn-sm" href="api\Delete_Post.php?id='.$row["blog_id"].'" role="button">'.'Delete</a></li></ul><br>';
            }
    }
} 
else 
{
    echo "0 results";
}

?>