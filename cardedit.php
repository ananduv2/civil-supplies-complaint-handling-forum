<?php
include('connection.php');
session_start();
if (isset($_POST['submit'])) {
      $a=$_POST['name'];
      $b=$_POST['members'];
      $q="UPDATE `pdata` SET `name`='$a',`members`='$b' WHERE `Rno`=$_SESSION[Rno]";
      $e=mysqli_query($con,$q);
      if($e)
      {
        header('Location:phome.php');
      }
}







?>
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
      <div style="padding-top: 100px;padding-left: 50px;">
      <form action="" method="POST">
        <h3>Card Details</h3>
      	<table>
      		<tr><th>Card No</th><?php echo "<td><input type='text' name='card' value='$_SESSION[Rno]' disabled></td>
          ";?></tr>
      		<tr>
      			<th>House Holder</th><?php
              $x="SELECT `id`, `Rno`, `name`, `members` FROM `pdata` WHERE `Rno`='$_SESSION[Rno]'";
              $y=mysqli_query($con,$x);
              foreach ($y as $z) {
                
                echo  "<td><input type='text' name='name' value='$z[name]' ></td></tr>
                <tr><th>No of members</th><td><input type='text' name='members' value='$z[members]' ></td></tr>";




              }?></tr>
            
            
            <tr><th></th><td><input type="submit" name="submit" value="Update"></td></tr>
      	</table>
      </form>
  </div>

	<div class="footer">
    <p>Designed and Maintained by Students,MCA Dept,TKMCE</p>
  </div>

</body>
</html>