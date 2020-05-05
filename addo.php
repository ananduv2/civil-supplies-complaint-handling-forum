<?php
include('connection.php');
          session_start();
          //$u=$_SESSSION['Rno'];
if(isset($_POST['submit']))
  {
    $a=$_POST['name'];
    $b=$_POST['username'];
    $c=$_POST['pswrd'];
    $d=$_POST['post'];
    $q1="INSERT INTO `officers`( `username`, `name`, `post`) VALUES ('$b','$a','$d')";
    $e1=mysqli_query($con,$q1);
    $q2="INSERT INTO `public`( `Rno`, `pswrd`, `utype`) VALUES ('$b','$c','1')";
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
        <a href="ahome.php">Official Database</a>
        <a href="pdb.php">Public Database</a>
        <a href="addo.php">Add Officials</a>
        <a href="logout.php">Logout</a>
      </div>
  
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Add Official Details</h2>
        <form action="" method="POST"><table>
          <tr><th>Name</th><td><input type="text" name="name"></td></tr>
          <tr><th>Username</th><td><input type="text" name="username"></td></tr>
          <tr><th>Password</th><td><input type="password" name="pswrd"></td></tr>
          <tr><th>Position</th><td><select name="post">
            <option value="1">Secretary</option>
            <option value="2">Commisioner</option>
            <option value="3">Vendor</option>
          </select></td></tr>
          
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Add to DB">
        </form>
      </div>
      <div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>
    </body>
    </html>