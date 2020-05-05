<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $i=$_SESSION['Rno'];
    $m=$_POST['message'];
    $q="INSERT INTO `complaints`(`Rno`, `Body`, `message`, `status`) VALUES ('$i','$m','','1')";
    $e=mysqli_query($con,$q);
    if($e)
        {
            echo "<script>alert'Your complaint is registered</script>";
            if($e)
            {
                header('Location:phome.php');
            }
        }
}




?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="civil.css">
</head>
<body>
   <div class="navbar">
        <a href="phome.php">Home</a>
        <a href="complaints.php">Complaints</a>
        <a href="status.php">Complaint Status</a>
        <a href="logout.php">Logout</a>
      </div>

    <div style="padding-top: 150px;padding-left: 50px;">
    	<form action="" method="POST">
    		<table><tr><th width="100px;">Drop your complaint here</th><td><textarea placeholder="Your complaint here..." name="message"></textarea></td></tr>
    			<tr><th></th><td><input type="submit" name="submit" value="Register Complaint"></td></tr></table>
    	</form></div>
        <div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>
</body>
</html>