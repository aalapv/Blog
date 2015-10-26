<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";

$conn = mysqli_connect($servername, $username, $password,$dbname);
echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT blogger_id,blogger_first,blogger_last FROM `blogger_info` WHERE blogger_username<>'admin@aalap.com' AND Approval=1";

$result = mysqli_query($conn, $sql);
session_start();
?>
<html>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<title>List Of Bloggers</title>

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
         <li><a class="btn btn-default btn-sm" href="admin.php" role="button">Bloggers</a></li>
         <li><a class="btn btn-default btn-sm" href="approval.php" role="button">Approve</a></li>
         <li><font color="white">Welcome, <?php echo $_SESSION["User"];?></font> </li> 
         <li><a class="btn btn-default btn-sm" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
      
       </ul>  
     </div>
   </div>
 </nav>

<div class="container">
  <div class="jumbotron">

<h3>List Of Bloggers</h3>
  <?php

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<a href="user_info.php?id='.$row["blogger_id"].'">'.$row["blogger_first"]." ".$row["blogger_last"].'</a><br>';
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

