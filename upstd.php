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
echo"<br>";
echo"<br>";
echo"<br>";

?>
<form method="post" action="upstd.php">
<table border="1" width="60%" align="center" style="margin-top:50px;">
<tr>
<th>Enter standard</th><td><input type="number" name="standard" placeholder="enter your standard"></td>
<th>Enter Student name</th><td><input type="text" name="name" placeholder="enter your name"></td>
<td><input type="submit" name="submit" value="Search"><td>
</tr>
</table>
</form>
<table border="2" align="center" width="80%" style="margin-top:20px;">
		<tr style="background-color:black;color:white; " align="center">
			<td>No</td>
			<td>Image</td>
			<td>Name</td>
			<td>Roll No</td>
			<td>Edit</td>
		</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcom.php');
	$std=$_POST['standard'];
	$name=$_POST['name'];
	$qry= "SELECT * FROM student WHERE `std`='$std' AND `name` LIKE '%$name%'";
	$run=mysqli_query($con,$qry);
	if (mysqli_num_rows($run)< 1)
	{
		echo "<tr><td colspan='5' align='center'>No record found</td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr align="center">
			<td><?php echo $count; ?></td>
			<td><img src="../dataimg/<?php echo $data['img'] ?>" style="max-width:100px;"></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['roll number'] ?></td>
			<td><a href="updateform.php ? sid=<?php echo $data['id']; ?>">Edit</a></td>
			</tr>
			<?php
		}
	}

}
?>
</table>
