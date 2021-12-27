<html>
<body bgcolor=pink>
  <center>
    <b><h1>Welcome to Application Form</h1></b>
    <a href="index.html" style="float:left" ><button  class="button">back</button></a>
        <a href="admin.php" style="float:right"><button class="button">admin</button></a>
    <form action="form.php" method="post">
      <table border="2">
        <tr>
          <td>
            first name:-
          </td>
          <td>
            <input type="text" name='fn'/>
          </td>
        </tr>
        <tr>
          <td>
            last name:-
          </td>
          <td>
            <input type="text" name='ln'/>
          </td>
        </tr>
        <tr>
        </tr>
          <td>
            Gender:-
          </td>
          <td>
            <input type="radio" name='gn' value='male'/>male
            <input type="radio" name='gn' value='female' />female

          </td>
        </tr>
        <tr>
          <td>
            mobile number:-
          </td>
          <td>
            <input type="text" name='mn'/>
          </td>
        </tr>
        <tr>
          <td colspan="2" align='center'>
              <input type="submit" name='submit' />
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>
<?php
  include('dbcon.php');
  if(isset($_POST['submit']))
  {
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $mn=$_POST['mn'];
    $gn=$_POST['gn'];
    $qry="INSERT INTO `form`(`fn`, `ln`, `mn`, `gender`) VALUES ('$fn','$ln','$mn','$gn')" ;
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
      ?>
      <script>
      alert("data inserted successfully!!");
      </script>
      <?php
    }
  }
 ?>
