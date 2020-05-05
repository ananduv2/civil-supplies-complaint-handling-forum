<?php
include('connection.php');
          session_start();
          $u=$_SESSSION['Rno'];






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
        <a href="logout.php" id="logout">Logout</a>
      </div>
      
      <div style="padding-left: 50px;padding-top: 50px;"><h2>Official DataBase</h2>
        <table border=3>
          <tr><th>NAME</th><th>USER NAME</th><th>POST</th></tr>
          <?php
          
          $q1="SELECT `id`, `Rno`, `pswrd`, `utype` FROM `public` WHERE `utype`='1' ";
          $e1=mysqli_query($con,$q1);
          foreach ($e1 as $x1) {
            $f=$x1['Rno'];
            $q2="SELECT `id`, `username`, `name`, `post` FROM `officers` WHERE `username`='$f'";
            $e2=mysqli_query($con,$q2);
            foreach ($e2 as $x2) {
              if($x2['post']=='1')
              {echo "<tr><td>$x2[name]</td><td>$x2[username]</td><td>Secretary</td></tr>";}
              elseif($x2['post']=='2')
              {echo "<tr><td>$x2[name]</td><td>$x2[username]</td><td>Commisioner</td></tr>";}
              elseif($x2['post']=='3')
              {echo "<tr><td>$x2[name]</td><td>$x2[username]</td><td>Vendor</td></tr>";}

            }
          }





          ?>
        </table></div>

<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>