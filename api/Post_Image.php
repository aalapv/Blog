<?php
session_start();
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">

<title>Post Image in Blog</title>

<body>
<div class="container">
  <div class="jumbotron">
  	
<h3>Post Image</h3>

<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="..\views\Blogger_Home.php">Aalap Valia</a>
     </div>
     <div>
       <ul class="list-inline">
         <li><a class="btn btn-default btn-sm" href="..\views\Blogger_Home.php" role="button">Home</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
         <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="..\views\Post.php" role="button">Post</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font> </li> 
         <li><a class="btn btn-default btn-sm" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>  
         
       </ul> 
       </ul>  
     </div>
   </div>
 </nav>

<form class="form-horizontal" action="Upload_Image.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Image" class="col-sm-2 control-label">Select Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="Filename">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="submit">Upload</button>
    </div>
  </div>
 </form>
 </div>
 </div>
</body>
</html>