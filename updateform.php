<?php
session_start();
	if(isset($_SESSION['uid']))
	{
	echo "";
	}

	else
	{
		header('location:../login.php');
	}

?>

<?php
include('header.php');
include('titlehead.php');
include('../dbcom.php');
?>
<?php
echo"<br>";
echo"<br>";
echo"<br>";
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<html>
<body>
<form action="updata.php" method="post" enctype="multipart/form-data">
<table border="2" align="center">

	<tr>
   <th>roll no.:</th>
		<td><input type="text"   name="roll"  value=<?php echo $data['roll number']; ?> required /></td>
	</tr>

<tr>
	<th>username:</th>
		<td><input type="text" name=" username"   value=<?php echo $data['name']; ?>   required/></td>
	</tr>
<tr>
	<th>city:</th>
		<td><input type="text" name="city" value=<?php echo $data['city']; ?>  required /></td>
</tr>
	<tr>
	<th>std:</th>
		<td><input type="number" name="std" value=<?php echo $data['std'];?>   required/></td>
   </tr>
   <tr>
   <th>parent con no.:</th>
		<td><input type="text" name="pcn"  value=<?php echo $data['parent con no.'];?> required/></td>
	</tr>
	<tr>
	<th>image:</th>

		<td><input type="file" name="simg" required/></td>
</tr>

	<tr>
	<td colspan="2" align="center">
	<input type="hidden" name="sid" value="<?php echo $dat['id']; ?> "/>
	<input type="submit" name="submit" /></td>
</tr>
</table>
 </form>
</body>
 </html>
