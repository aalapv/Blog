<?php
session_start();
?>
<html>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<title>Home</title>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="Admin_Home.php">Aalap Valia</a>
     </div>
     <div>
       <ul class="list-inline">
 	       <li><a class="btn btn-default btn-sm" href="Admin_Home.php" role="button">Home</a></li>
 		     <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
		     <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="api\admin.php" role="button">Bloggers</a></li>
         <li><a class="btn btn-default btn-sm" href="api\approval.php" role="button">Approve</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font> </li> 
         <li><a class="btn btn-default btn-sm" href="api\logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
      
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">
  	<h1>Welcome to the Blog!</h1>
 
    <?php include("api\Display_All.php");?>

  </div>
</div>


</body>
</html>
