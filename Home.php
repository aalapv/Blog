<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<title>Home</title>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="Home.php">Aalap Valia</a>
     </div>
     <div>
       <ul class="list-inline">
 	       <li><a class="btn btn-default btn-sm" href="Home.php" role="button">Home</a></li>
 		     <li><a class="btn btn-default btn-sm" href="#" role="button">About</a></li>
		     <li><a class="btn btn-default btn-sm" href="#" role="button">Contact Us</a></li>
         <li><a class="btn btn-default btn-sm" href="views\Login.html" role="button"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>       
         <li><a class="btn btn-default btn-sm" href="views\SignUp.html" role="button"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">
  	<h1>Welcome to the Blog!</h1>
    
    <?php require("api\Display_All.php");?>

  </div>
</div>


</body>
</html>
