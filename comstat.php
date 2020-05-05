
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="civil.css">
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

      <div style="padding-top: 150px;padding-left: 50px;">
          
          <form action="" method="POST"><table border="1" class="form-control">
              <tr><th width="200px">Complaint</th><th width="200px">Status</th><th width="200px">Response</th></tr>
              <?php
include('connection.php');
session_start();

    $i=$_SESSION['Rno'];
    $q="SELECT `id`, `uid`, `body`, `status`, `msg`,`des` FROM `ocom` WHERE `uid`='$i'";
    $e=mysqli_query($con,$q);
    foreach ($e as $k)
     {
         if($k['status']=='1')
            {
              echo "<tr><td>$k[body]</td><td>Pending/Under Investigation</td><td>$k[msg]";
            }
        elseif($k['status']=='0')
        {
           echo "<tr><td>$k[body]</td><td>Action taken</td><td>$k[msg]"; 
        }
    }











              ?>
          </table></form>
      </div>

    
</body>
</html>