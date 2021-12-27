<?php
session_start();
if(isset($_SESSION['uid']))
{
  header("location:dashboard.php");
}

 ?>
<html>
<body bgcolor=pink>
  <center>
    <b><h1>welcome to admin</h1></b>
    <form action="admin.php" method="post">
      <table border="2">
        <tr>
          <td>
            username.:-
          </td>
          <td>
            <input type="text" name='un'/>
          </td>
        </tr>
        <tr>
          <td>
            password:-
          </td>
          <td>
            <input type="password" name='pw'/>
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
    $mn=$_POST['un'];
    $pw=$_POST['pw'];
    $qry="SELECT * FROM `admin` WHERE `username` ='$mn' AND `password`='$pw'" ;
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
      ?>
      <script>
      alert("moble and password is not match!!");
      window.open('admin.php','_self');
      </script>
      <?php
    }
    else {
      $data=mysqli_fetch_assoc($run);
      $id=$data['pw'];
      $_SESSION['uid']=$id;
      header("location:login.php");
    }
  }
 ?>
