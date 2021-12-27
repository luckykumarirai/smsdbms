<?php
	 include('../dbcom.php');
	 $roll = $_POST['roll'];
	 $name = $_POST['username'];
	 $city = $_POST['city'];
	 $std = $_POST['std'];
	 $pcn = $_POST['pcn'];
	 $id=$_POST['sid'];
	 $imagename = $_FILES['simg']['name'];
	 $tempname  = $_FILES['simg']['tmp_name'];
	 move_uploaded_file($tempname,"../dataimg/$imagename");
	 $qry="UPDATE `student` SET `roll number` = '$roll', `name` = '$name', `city` = '$city', `std` = '$std',`parent con no.`='pnc', `image` = '$imagename'";
	 $run = mysqli_query($con,$qry);
	 if($run == true)
	 {
		 ?>
		 <script>
		 alert('data updated successfully');
		 window.open('updateform.php?sid=<?php echo $id;?>','_self');
		 <?php
	 }
?>
