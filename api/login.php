<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog";
$User=$_POST["email"];
$pwd=$_POST["password"];
$md=md5($pwd);

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($User!='admin@xyz.com')
{
$sql = "UPDATE `blogger_info` SET `blogger_is_active`=0 WHERE NOW()>blogger_end_date AND blogger_username='$User'";
$result = mysqli_query($conn, $sql);
}

$sql = "SELECT blogger_username,blogger_password,blogger_is_active,blogger_end_date,approval FROM blogger_info where blogger_username='$User'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    $Email=$row["blogger_username"];
    $Pass=$row["blogger_password"];

    if($md==$Pass && $row["blogger_is_active"]==1 && $row["approval"]==1)
    {
     session_start();
     $_SESSION["User"]=$row["blogger_username"];
     if($row["blogger_username"]=="admin@xyz.com")
      header('Location: ..\Admin_Home.php');
     else
        header('Location: ..\Blogger_Home.php');
    }
   if($md!=$Pass)
     echo "Invalid Password.";
   else if($row["approval"]==0)
      echo "Account yet to be approved.";
   else
     echo "Account Inactive/Expired. Contact Admin."   ;

}

else 
{
    echo "Invalid Username.";
}

?>