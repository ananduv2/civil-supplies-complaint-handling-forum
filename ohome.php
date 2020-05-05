<?php
include('connection.php');
          session_start();
          //echo($_SESSION['Rno']);exit();






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
        <a href="addp.php" id="apd">Add Public details</a>
        <a href="readcomplaints.php">Complaints Handling</a>
        <a href="ocomread2.php">Official Complaints</a>
        <a href="logout.php">Logout</a>

      </div>
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Public DataBase</h2>
        <table border=3>
          <tr><th>Name</th><th>Ration Card No</th><th>No of Members</th></tr>
          <?php
          
          $q1="SELECT `id`, `Rno`, `pswrd`, `utype` FROM `public` WHERE `utype`='2' ";
          $e1=mysqli_query($con,$q1);
          foreach ($e1 as $x1) {
            $f=$x1['Rno'];
            $q2="SELECT `id`, `Rno`, `name`, `members` FROM `pdata` WHERE `Rno`='$f'";
            $e2=mysqli_query($con,$q2);
            foreach ($e2 as $x2) {
             
              echo "<tr><td>$x2[name]</td><td>$x2[Rno]</td><td>$x2[members]</td></tr>";
            }
          }





          ?>
        </table></div>

<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>