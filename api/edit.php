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





$user=$_SESSION["User"];
$sql = "SELECT blogger_id FROM `blogger_info` where blogger_username='$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id=$row["blogger_id"];


$sql = "SELECT * FROM `blog_master` where blogger_id=$id";

$result = mysqli_query($conn, $sql);


?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<title>Home</title>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="..\Home.php">Aalap Valia</a>
     </div>
     <div>
       <ul class="list-inline">
         <li><a class="btn btn-default btn-sm" href="..\Home.php" role="button">Home</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="edit.php" role="button">Edit</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font> </li> 
         <li><a class="btn btn-default btn-sm" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">
    <p>

<?php
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $bid=$row["blog_id"];
        echo '<p><h2><strong><a href="Display_One.php?id='.$bid.'">'.$row["blog_title"].'</strong></a>';
        echo '<h5>'."Posted at ".$row["creation_date"]." by ".'<a href="user_posts.php?id='.$row["blogger_id"].'">'.$row["blog_author"].'</a>'." in ".'<a href="cat_posts.php?cat='.$row["blog_category"].'">'.$row["blog_category"].'</a>';
        echo '<h4>'.$row["blog_desc"].'<br>';
         echo '<ul class="list-inline">';
                echo '<li><a class="btn btn-default btn-sm" href="..\views\Update.php?id='.$row["blog_id"].'" role="button">'.'Update</a></li></ul><br>';
    }
} 
else 
{
    echo "0 results";
}
?>






 </div>
</div>


</body>
</html>










