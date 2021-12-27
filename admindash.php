<?php
session_start();
	if(isset($_SESSION['uid']))
	{
	echo " ";
	}

	else
	{
		header('location:login.php');
	}
include('header.php');

?>
<div class="admintitle" align="center">
<a href="logout.php" style="float:right; margin-right:20px">logout</a>
<h1>welcome to Admin dashboard</h1>
</div>
<div class="dashboard">
<table border="2">
<tr>
<td>1.</td><td><a href="addstd.php" >insert student details</a></td>
</tr>
<tr>
<td>1.</td><td><a href="update.php">update student details</a></td>
</tr>
<tr>
<td>1.</td><td><a href="delstd.php" >delete student details</a></td>
</tr>
</div>
</table>












