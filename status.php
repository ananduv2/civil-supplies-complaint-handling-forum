
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
          
          <form action="" method="POST"><table border="1" class="form-control">
              <tr><th width="200px">Complaint</th><th width="200px">Status</th><th width="200px">Response</th></tr>
              <?php
include('connection.php');
session_start();

    $i=$_SESSION['Rno'];
    $q="SELECT `id`, `Rno`, `Body`, `message`, `status` FROM `complaints` WHERE `Rno`='$i'";
    $e=mysqli_query($con,$q);
    foreach ($e as $k)
     {
         if($k['status']=='1')
            {
              echo "<tr><td>$k[Body]</td><td>Pending/Under Investigation</td><td>$k[message]";
            }
        elseif($k['status']=='0')
        {
           echo "<tr><td>$k[Body]</td><td>Action taken</td><td>$k[message]"; 
        }
    }











              ?>
          </table></form>
      </div>

    
</body>
</html>