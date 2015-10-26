<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$blog_postnumber = 5;

if(!isset($_GET['page'])) {
	$page = 1;
}
else {
	$page = (int)$_GET['page'];
}
$from = (($page * $blog_postnumber) - $blog_postnumber);

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `blog_master` WHERE blog_is_active=1 ORDER BY `creation_date` DESC LIMIT $from,$blog_postnumber";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
    	$id=$row["blog_id"];
    	echo '<p><h2><strong><a href="api\Display_One.php?id='.$id.'">'.$row["blog_title"].'</strong></a>';
        echo '<h5>'."Posted at ".$row["creation_date"]." by ".'<a href="api\user_posts.php?id='.$row["blogger_id"].'">'.$row["blog_author"].'</a>'." in ".'<a href="api\cat_posts.php?cat='.$row["blog_category"].'">'.$row["blog_category"].'</a>';
        echo '<h4>'.$row["blog_desc"].'<br>';

        if (isset($_SESSION['User'])) 
        {
         if($_SESSION["User"]=='admin@xyz.com')
            
            {
                echo '<ul class="list-inline">';
                echo '<li><a class="btn btn-default btn-sm" href="api\Delete_Post.php?id='.$row["blog_id"].'" role="button">'.'Delete</a></li></ul><br>';
            }
         }   
    }
} 
else 
{
    echo "0 results";
}

$sql = "SELECT COUNT(*) AS num FROM `blog_master`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$post_count=$row["num"];
$total_pages = ceil($post_count / $blog_postnumber);
echo "<br><center>";

if ($page > 1) {
    $prev = ($page - 1);
    echo "<a href=\"?page=$prev\">&lt;&lt;  Newer</a> ";
}
for($i = 1; $i <= $total_pages; $i++) {
    if ($page == $i) {
        echo "$i ";
        }
		else {
           echo "<a href=\"?page=$i\">$i</a> ";
        }
}

if ($page < $total_pages) {
   $next = ($page + 1);
   echo "<a href=\"?page=$next\">Older &gt;&gt;</a>";
}
echo "</center>";



?>