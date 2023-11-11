<html>

<head>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

</head>


<body>
<?php
require('../../php/connect.php'); 
session_start();
$email=$_SESSION['email'];
$currentpass=$_POST['password'];
$newpass=$_POST['newpassword'];
$renewpass=$_POST['renewpassword'];

$sql="SELECT * from crime_login where email='$email' ";
$data=sel($sql);
$row = mysqli_fetch_assoc($data);

if ($row['password'] == $currentpass) 
{
   if($newpass==$renewpass)
   {
    $sql2="UPDATE crime_login SET PASSWORD='$newpass' where email='$email' ";
    update($sql2);
    ?>
    <script>
          Swal.fire({
            icon: 'success',
            text: 'User Password updated',
            didClose: () => {
              window.location.replace('../profile.php');
            }
          });
          </script>
          <?php
   }
   else if($newpass!=$renewpass)
   {
    ?>
          <script>
            Swal.fire({
              icon: 'error',
              text: 'Password Missmatch !',
              didClose: () => {
                window.location.replace('../profile.php');
              }
            });
          </script>
        <?php
   }
}
else{
    ?>
          <script>
            Swal.fire({
              icon: 'error',
              text: 'Password updation failed !',
              didClose: () => {
                window.location.replace('../user/profile.php');
              }
            });
          </script>
        <?php
}
?>
</body>
</html>