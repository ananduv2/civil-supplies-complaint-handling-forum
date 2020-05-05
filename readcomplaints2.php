<?php
include('connection.php');
  session_start();

    $i=$_SESSION['Rno'];        






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
        
        <a href="ohome2.php">Public Database</a>
        <a href="addp2.php">Add Public details</a>
        <a href="readcomplaints2.php">Complaints Handling</a>
        <a href="gencomplaint.php">Register Complaint</a>
        <a href="comstat.php">Complaint Status</a>
        <a href="ocomread.php">Official Complaints</a>
        <a href="logout.php">Logout</a>

      </div>
      <div style="padding-top: 50px;padding-left: 50px;">
        <h2>Pending Complaints</h2>
          
          <form action="" method="POST"><table border="1" class="form-control">
              <tr><th width="200px">Card no</th><th width="200px">Complaint</th><th width="200px">Status</th><th width="200px">Response</th></tr>
              <?php
include('connection.php');

    $q="SELECT `id`, `Rno`, `Body`, `message`, `status` FROM `complaints` WHERE `status`='1'";
    $e=mysqli_query($con,$q);
    foreach ($e as $k)
     {$t=$k['Rno'];
      $s=$k['id'];
         
              echo "<tr><td>$k[Rno]</td><td>$k[Body]</td><td>Pending/Under Investigation</td><td>$k[message]</td><td><center><button><a href='updateresponse.php?m=$t&n=$s'>Update response</a></center></button></td></tr>";
         
    }











              ?>
          </table></form>
      </div>

<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>