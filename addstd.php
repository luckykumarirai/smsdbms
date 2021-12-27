<?php
session_start();
	if(isset($_SESSION['uid']))
	{
	echo "";
	} 

	else
	{
		header('location:login.php');
	}
	
?>
<?php
include('header.php');
include('titlehead.php');
echo"<br>";
echo"<br>";
echo"<br>";

?>
<form action="addstd.php" method="post" enctype="multipart/form-data">
<table border="2" align="center">

	<tr>
   <th>roll no.:</th>
		<td><input type="text"   name="roll"    placeholder="enter ur  roll" required></td>
		</tr>
		<tr>
	
	<th>username:</th>
		<td><input type="text" name=" username" placeholder="enter ur name"  required></td>	
	</tr>
<tr>	
	<th>city:</th>
		<td><input type="text" name="city"    placeholder="enter ur  city" required></td>
		</tr>
		<tr>
	<th>std:</th>	
		<td><input type="number" name="std"    placeholder="enter ur  standered" required></td>
   </tr>
   <tr>
   <th>parent con no.:</th>
		<td><input type="text" name="pcn"    placeholder="enter ur parent con no. "required></td>
	</tr>
	<tr>
	<th>image:</th>
	
		<td><input type="file" name="simg" required></td>
</tr>

	<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" ></td>
</tr>
</table>
 </form>
 </html>
 <?php
 if(isset($_POST['submit']))
 {
	 include('../dbcon.php');
	 $roll = $_POST['roll'];
	 $name = $_POST['username'];
	 $city = $_POST['city'];
	 $std = $_POST['std'];
	 $pcn = $_POST['pcn'];
	 $imagename = $_FILES['simg']['name'];
	 $tempname  = $_FILES['simg']['tmp_name'];
	 move_uploaded_file($tempname,"../dataimg/$imagename");
	 $qry="INSERT INTO `student`(`roll number`, `name`, `city`, `std`, `parent con no.`, `image`) VALUES ('$roll','$name','$city','$std','$pcn','$imagename')";
	 $run = mysqli_query($con,$qry);
	 if($run == true)
	 {
		 ?>
		 <script>
		 alert('data inserted successfully');
		 </script>
		 <?php
	 }
 }
?>
