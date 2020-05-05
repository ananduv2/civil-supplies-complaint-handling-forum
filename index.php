
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="civil.css">
</head>
<body>
    <div class="navbar">
        <h1 style="color: white;">&nbsp;&nbsp;&nbsp;CIVIL SUPPLIES COMPLAINT HANDLING FORUM</h1>
      </div>
<div>
    <div style="float: left;width: 70%;height: 95vh;" >
      <div style="padding-left: 50px;padding-top: 150px;">
     
     <table > 

<tr><td><img src="minister.jpg" width="220px" height="267px" alt="minister"></td></tr><tr><tr><th>Thilothaman</th></tr><td><center><h3>MINISTER</h3></center></td></tr><tr><td><center>Civil Supplies</center></td></tr>


</table></div>



    </div>
    <div style="float: right;width: 30%;background-color:grey;height: 95vh;">
      <form action="" method="POST"><center>
        <table style="padding-top: 300px;">
          <tr><th>Card No:</th><td><input type="text" name="card" id="username"></td></tr>
          <tr><th>Password</th><td><input type="password" name="pswd" id="pswd"></td></tr>
          <tr><th></th><td><input type="submit" value="LOGIN" name="submit" id="login"></td></tr>
        </table></center>
      </form>
    </div>
</div>
<div class="footer">
    <p>Designed and maintaned by Students of TKMCE MCA Dept</p>
  </div>

</body>
</html>
<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
  $a=$_POST['card'];
  $b=$_POST['pswd'];
  $q=("SELECT `id`, `Rno`, `pswrd`,`utype` FROM `public` WHERE `Rno`='$a' AND `pswrd`='$b'");
  $e=mysqli_query($con,$q);
  while($f=mysqli_fetch_array($e))
{  
  $g=$f['Rno'];
  $h=$f['pswrd'];
  $u=$f['utype'];
  if($e)
  {
    $_SESSION['Rno']=$g;
    $_SESSION['pswrd']=$h;
    if($u=='2')
    {

      header('Location:phome.php');
    }
    elseif ($u=='1') 
    {
      $x="SELECT `id`, `username`, `name`, `post` FROM `officers` WHERE `username`='$g'";
      $y=mysqli_query($con,$x);
      foreach ($y as $z) {
        if ($z['post']=='1')
          
          { 
                     header('Location:ohome.php');
          }
          elseif($z['post']=='2')
                     header('Location:ohome2.php');
                     
          elseif($z['post']=='3')
                     header('Location:ohome3.php');
                   
        }

          
        }
        
      
    
    
    elseif ($u=='0') {
     
    header('Location:ahome.php');
    }
  }
}



}

?>
