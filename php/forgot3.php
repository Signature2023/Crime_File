<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php');
    session_start();
    $email = $_SESSION["email"];
    if (isset($_POST['forgot_submit'])) {
    $pswd = $_POST["pswd"];

     $sql = "update crime_login set password='$pswd' where email='$email'";
     update($sql);
     
        
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Crime login Updated!',
                }).then((result) => {
                    window.location.replace('../login.html');
                })
            </script>
        <?php
    }
         else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Updation error',
                }).then((result) => {
                    window.location.replace('../../');
                })
            </script>
        <?php
        }
        ?>

    </body>

</html>
