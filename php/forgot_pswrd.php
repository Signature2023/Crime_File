<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php');
    session_start();
    $a = $_POST["email"];

    $sql="SELECT * FROM crime_login where email = '$a'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['email']==$a;
        
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Verified!',
                }).then((result) => {
                    window.location.replace('../login.html');
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account already existing!',
                }).then((result) => {
                    window.location.replace('../../');
                })
            </script>
        <?php
        }
        ?>

    </body>

</html>