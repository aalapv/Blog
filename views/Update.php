<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$id=$_GET["id"];

$conn = mysqli_connect($servername, $username, $password,$dbname);


$sql="SELECT * FROM blog_master WHERE blog_id=$id";

$result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result))
 {

        $old_title=$row["blog_title"];
        $old_desc=$row["blog_desc"];
        $old_cat=$row["blog_category"];
        
 }



?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">

<title>Post</title>

<body>
<div class="container">
  <div class="jumbotron">
     <h3>Post Article</h3>
<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="..\Blogger_Home.php">Aalap Valia</a>
     </div>
     <div>
	 <ul class="list-inline">
         <li><a class="btn btn-default btn-sm" href="..\Blogger_Home.php" role="button">Home</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="Post.php" role="button">Post</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font> </li> 
         <li><a class="btn btn-default btn-sm" href="..\api\logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>  
         
       </ul> 
       </ul>  
     </div>
   </div>
 </nav>

<form class="form-horizontal" action="..\api\Update_Post.php?id=<?php echo $id;?>" method="post">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="Title" value=<?php echo $old_title; ?>>
    </div>
  </div>
  
  <div class="form-group">
    <label for="entry" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
      <textarea name="entry" rows="15" cols="118" placeholder=" Content"><?php echo $old_desc; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="category" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="category" placeholder="Category" value=<?php echo $old_cat; ?>>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="submit">Update</button>
    </div>
  </div>
 </form>
 </div>
 </div>
</body>
</html>