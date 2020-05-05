<?php
include('connection.php');
          session_start();
          //$u=$_SESSSION['Rno'];
if(isset($_POST['submit']))
  {
    $a=$_POST['card'];
    $b=$_POST['name'];
    $c=$_POST['members'];
    $d=$_POST['mob'];
    $q1="INSERT INTO `pdata`( `Rno`, `name`, `members`) VALUES ('$a','$b','$c')";
    $e1=mysqli_query($con,$q1);
    $q2="INSERT INTO `public`( `Rno`, `pswrd`, `utype`) VALUES ('$a','$d','2')";
    $e2=mysqli_query($con,$q2);
    if($e2)
    {
      echo "<script>alert('Database Updated')</script>";
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
        <a href="ocomread2.php">Official Complaints</a>
        <a href="logout.php">Logout</a>
      </div>
  
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Add Official Details</h2>
        <form action="" method="POST"><table border="0">
          <tr><th>Card No</th><td><input type="text"id="card" name="card" placeholder="Enter ration card no"></td></tr>
          <tr><th>Name</th><td><input type="text" id="name" name="name" placeholder="Enter name of householder"></td></tr>
          <tr><th>No of members</th><td><input type="text" id="members" name="members" placeholder="Enter no of family members"></td></tr>
          <tr><th>Mobile</th><td><input type="password" name="mob" id="mob" placeholder="Enter mobile number"></td></tr>
          
          
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Add to DB" id="atdb">
        </form>
      </div>
      <div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>
    </body>
    </html>