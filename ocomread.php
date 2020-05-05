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
        <a href="gencomplaint.php" id="regcomplaint">Register Complaint</a>
        <a href="comstat.php">Complaint Status</a>
        <a href="ocomread.php">Official Complaints</a>
        <a href="logout.php">Logout</a>

      </div>
    
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Add Official Details</h2>
        <form action="" method="POST">
          <table border="1">
            <tr><th>Name</th><th>Complaint</th><th>Response</th><th></th></tr>
              <?php
                include ('connection.php');
                session_start();
                $u=$_SESSION['Rno'];
                $q1="SELECT `id`, `username`, `name`, `post` FROM `officers` WHERE `username`='$u'";
                $e1=mysqli_query($con,$q1);
                 //echo $q1;exit();
                foreach ($e1 as $k) {
                  $d=$k['post'];//echo $d;exit();
                }
                $q="SELECT `id`, `uid`, `body`, `status`, `msg`, `des` FROM `ocom` WHERE `des`='$d'";
                $e=mysqli_query($con,$q);//echo $q;exit();
                foreach ($e as $k2)
                 { if($k2['status']=='1')
                  {
                   $t=$k2['uid'];
                   $i=$k2['id'];//echo $t;exit();
                   $q2="SELECT `id`, `username`, `name`, `post` FROM `officers` WHERE `username`='$t'";
                   $e2=mysqli_query($con,$q2);//echo $q2;exit();
                  foreach ($e2 as $key) {
                      $name=$key['name'];//echo $k2['msg'];exit();

                   
                 echo "<tr>";
                 echo "<td>$name</td>";
                 echo "<td>$k2[body]</td><td>$k2[msg]</td>";
                 echo "<td><button><a href='rcom.php?m=$t&n=$i'>Send response</a></button></td>";
                 echo "</tr>";}
                  }
                }



              ?>
          </table>
        </form>
      </div>
      

<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>