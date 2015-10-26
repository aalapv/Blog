<?php
session_start();
$id=$_GET["id"];
?>
<html>
<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">

<title>Article Deleted</title>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="..\Admin_Home.php">Aalap Valia</a>
     </div>
     <div>
       <ul class="list-inline">
 	       <li><a class="btn btn-default btn-sm" href="..\Admin_Home.php" role="button">Home</a></li>
 		     <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
		     <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="api\admin.php" role="button">Bloggers</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font>font> </li> 
         <li><a class="btn btn-default btn-sm" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
      
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">
  	<h1>Article Deleted.</h1>
    <div>
       <ul class="list-inline">
         <li><a class="btn btn-default btn-sm" href="..\Admin_Home.php" role="button">Home</a></li>
         
       </ul>  
     </div>
    
   </div>
</div>


</body>
</html>
