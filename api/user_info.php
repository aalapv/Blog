<html>
<title>Blogger Info</title>
<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$id=$_GET["id"];

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT blogger_first,blogger_last,blogger_gender,blogger_dob,blogger_mobile,blogger_username,blogger_password,blogger_creation_date,blogger_end_date,blogger_is_active FROM `blogger_info` WHERE blogger_id=$id";

$result = mysqli_query($conn, $sql);
?>
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

<h3>Blogger Info</h3>

<?php
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        if($row["blogger_is_active"]==1)
           $status="Yes";
        else
           $status="No";
    	echo '<table class="table table-bordered table-striped">'.'<tr>'.'<th>First</th>'.'<th>Last</th>'.'<th>Gender</th>'.'<th>DOB</th>'.'<th>Mobile</th>'.'<th>Username</th>'.'<th>Creation</th>'.'<th>Expiry</th>'.'<th>Active</th>'.'</tr>';
        echo '<tr>'.'<td>'.$row["blogger_first"].'</td><td>'.$row["blogger_last"].'</td><td>'.$row["blogger_gender"].'</td><td>'.$row["blogger_dob"].'</td><td>'.$row["blogger_mobile"].'</td><td>'.$row["blogger_username"].'</td><td>'.$row["blogger_creation_date"].'</td><td>'.$row["blogger_end_date"].'</td><td>'.$status.'</td></tr></table>';
    }
} 

?>


<ul class="list-inline">
<li><a class="btn btn-default btn-sm" href="Update_Sub.php?id=<?php echo $id?>" role="button">Update Subscription</a></li>
<li><a class="btn btn-default btn-sm" href="change_status.php?id=<?php echo $id?>" role="button">Change Status</a></li>

</ul>
</div>
</div>
</body>
</html>