<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$id=$_GET["id"];
$conn = mysqli_connect($servername, $username, $password,$dbname);
echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM `blog_master` where blog_id=$id";

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
         <li><a class="btn btn-default btn-sm" href="..\views\Login.html" role="button"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>       
         <li><a class="btn btn-default btn-sm" href="..\views\SignUp.html" role="button"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
        echo '<p><h2><strong>'.$row["blog_title"].'</strong></h2>';
        echo "Posted at ".$row["creation_date"]." by ".'<a href="user_posts.php?id='.$row["blogger_id"].'">'.$row["blog_author"].'</a>'." in ".'<a href="cat_posts.php?cat='.$row["blog_category"].'">'.$row["blog_category"].'</a>';
        echo '<h4>'.$row["blog_desc"].'</h4>';
    }

   $sql = "SELECT `blog_detail_image` FROM `blog_detail` WHERE blog_id=$id";
   $result = mysqli_query($conn, $sql);
   $row=mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) 
    {
  
   echo '<img src="'.$row["blog_detail_image"].'"height=40% width=30% class="img-rounded">';
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

