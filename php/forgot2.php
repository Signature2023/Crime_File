<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    require('connect.php');
    $email = $_SESSION["email"];
    
        $s_answer = $_POST["s_answer"];

        $sql = "SELECT security_que, ans FROM crime_login WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $security_answer = $row['ans'];
            if ($s_answer === $security_answer) {
    ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Security answer verified !',
                    }).then((result) => {
                        window.location.replace('../forgot2.html');
                    })
                </script>
            <?php
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Updation error',
                    }).then((result) => {
                        window.location.replace('../login.html');
                    })
                </script>
    <?php
            }
        } else {
    ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Database error',
                }).then((result) => {
                    window.location.replace('../../');
                })
            </script>
    <?php
        }
    
    ?>

</body>

</html>