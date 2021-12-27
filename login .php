 <?php
 session_start();
 if(isset($_SESSION['uid']))
 {
	header('location:admindash.php');
 }
 ?>
 <html>
<head>
<title align="center">admin login</title>
</head>
<body>
<h1 align="center">admin login</h1>
<form action="login.php" method="post">
<table border="1" align="center">
<tr> 
	<td>username:</td><td><input type="text" name="username" required></td>
</tr>
<tr>
	<td>password:</td>
	<td><input type="password" name="password" required></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit"  name="login" value="login"></td>
</tr>	
</table>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$qry = "SELECT * FROM admin WHERE `username`='$username' AND`password`='$password' " ;
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
		alert('username or password not match !!');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id= $data['id'];
		echo "id =".$id;
		$_SESSION['uid']=$id;
		header('location:admindash.php');
	}
}
?>
