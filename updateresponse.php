<?php
include('connection.php');
  session_start();

    $i=$_SESSION['Rno'];        

$j=$_GET['m'];
$k=$_GET['n'];
if (isset($_POST['submit'])) {
  $a=$_POST['response'];
  $b=$_POST['complete'];
  if($b=='2'){
  $q="UPDATE `complaints` SET `message`='$a',`status`='0' WHERE `id`='$k' AND `Rno`='$j'";
  $e=mysqli_query($con,$q);
  echo "<script>alert('Response updated');window.location.replace('readcomplaints.php');</script>";
  }
  elseif($b=='1'){
  $q="UPDATE `complaints` SET `message`='$a' WHERE `id`='$k' AND `Rno`='$j'";
  $e=mysqli_query($con,$q);
  echo "<script>alert('Response updated');window.location.replace('readcomplaints.php');</script>";
  }
  elseif($b=='0'){
  echo "<script>alert('Please select a response')</script>";
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
        
        <a href="ohome.php">Public Database</a>
        <a href="addp.php">Add Public details</a>
        <a href="readcomplaints.php">Complaints Handling</a>
        <a href="logout.php">Logout</a>

      </div>
      <div style="padding-top: 50px;padding-left: 50px;">
        <h2>Update Response</h2>
        <form action="" method="POST">
        <textarea name="response"></textarea>
        <br><p>Is complaint rectified?</p>
        <select name="complete">
          <option value="0">--Select--</option>
          <option value="1">No</option>
          <option value="2">Yes</option>
        </select>
        <br><input type="submit" name="submit" value="update">
        </form>
      </div>    
<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>