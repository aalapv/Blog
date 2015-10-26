<?php
session_start();
?>
<html>
<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">

<title>Article Updated</title>

<body>
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
         <li><a class="btn btn-default btn-sm" href="..\views\Post.php" role="button">Post</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font>font> </li> 
         <li><a class="btn btn-default btn-sm" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
      
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">
  	<h1>Article Updated.</h1>
    <div>
       <ul class="list-inline">
         <li><a class="btn btn-default btn-sm" href="..\Blogger_Home.php" role="button">Home</a></li>
         <li><a class="btn btn-default btn-sm" href="..\views\Post.php" role="button">Post New</a></li>
         
       </ul>  
     </div>
    
   </div>
</div>


</body>
</html>
