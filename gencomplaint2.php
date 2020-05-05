<?php
include('connection.php');
          session_start();
          $u=$_SESSION['Rno'];
          //echo ($u);
if (isset($_POST['submit'])) {
  $a=$_POST['complaint'];
  $q1="SELECT  `post` FROM `officers` WHERE `username`='$u'";
  $e1=mysqli_query($con,$q1);
  //echo $q1;
  foreach ($e1 as $k) {
    $m=$k['post']-1;
    //echo $m;exit();
  }
  $q="INSERT INTO `ocom`(`uid`, `body`, `status`,`des`) VALUES ('$u','$a','1','$m')";
  $e=mysqli_query($con,$q);
  if ($e) {
    //echo($q);
    echo "<script>alert('Complaint registered successfully');window.location.replace('ohome2.php')</script>";
  }
}





?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="civil.css">
<style>
  th{
    width: 150px;
  }
</style>
</head>
<body>
  <div class="navbar">
        
        <a href="ohome3.php">Public Database</a>
        <a href="addp3.php">Add Public details</a>
        <a href="readcomplaints3.php">Complaints Handling</a>
        <a href="gencomplaint2.php">Register Complaint</a>
        <a href="comstat2.php">Complaint Status</a>
        <a href="logout.php">Logout</a>

      </div>
    
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Add Official Details</h2>
        <form action="" method="POST">
          <table>
            <tr><td><textarea name="complaint"></textarea></td></tr>
            <tr><td><input type="submit" name="submit" value="REGISTER COMPLAINT"></td></tr>
          </table>
        </form>
      </div>
      

<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>