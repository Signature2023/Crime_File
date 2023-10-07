<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body>
    <?php
    session_start();

    echo "success";
    // require("../../php/connect.php");
       require("../php/connect.php");
    if (isset($_POST['login'])) {

        echo "success";
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from crime_login where email='$email'";
        if (num($sql) != 0) {
          
            $res = sel($sql);
            $row = mysqli_fetch_assoc($res);
            if ($password == $row['password']) {
                $_SESSION['email'] = $email;
                $_SESSION['menu'] = 'dash';
                // user
                if ($row['user_type'] == 0) {
                    $sql = "select statusflag from crime_login where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['statusflag'] == 0) {
    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../index.html');
                            });
                        </script>
                    <?php
                    } else {
                        
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!',
                            }).then((result) => {
                                window.location.replace('../police_profile/index.php');
                            });
                        </script>
                    <?php
                    }
                }
                // guide
                else if ($row['user_type'] == 1) {
                    $sql = "select statusflag from crime_login where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['statusflag'] == 0) {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../index.html');
                            });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!!',
                            }).then((result) => {
                                window.location.replace('../citizen_profile/index.php');
                            });
                        </script>
                    <?php
                    }
                }
               
                else if ($row['user_type'] == 2) {
                    $sql = "select statusflag from crime_login where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['statusflag'] == 0) {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../index.html');
                            });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!!',
                            }).then((result) => {
                                window.location.replace('../ward_profile/index.php');
                            });
                        </script>
                    <?php
                    }
                }
               
                //admin
                
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Incorrect credentials',
                    }).then((result) => {
                        window.location.replace('../index.html');
                    });
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account doesn\'t exsist!',
                }).then((result) => {
                    window.location.replace('../../index.html');
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>