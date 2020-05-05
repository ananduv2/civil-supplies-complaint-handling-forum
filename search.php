
<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
	<form action="" method="POST">
		
      <input type="text" name="search"><input type="submit" name="submit" value="search">


	</form>

</body>
</html>
<?php
include('connection.php');
session_start();
if (isset($_POST['submit'])) {
	$a=$_POST['search'];
	echo "<script>window.location.href('result.php?t=$a')";
}








?>