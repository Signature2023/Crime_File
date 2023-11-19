<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php'); //import external file
    if (isset($_POST['ward_reg'])) {
        //submit button name
        $fname = $_POST['fname'];
        $ward_no = $_POST['ward_no'];
        $ward_name = $_POST['ward_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $place = $_POST['place'];
        $security = $_POST['security'];
        $ans = $_POST['ans'];
        $password = $_POST['password'];
        $photo_path = "../ward_profile/img/photo1.jpeg";
        $photo = basename($photo_path);

        $sql = "select * from crime_login where email='$email'";
        if (num($sql) == 0) {
            $sql = "insert into ward_reg values('$fname','$ward_no','$ward_name','$gender','$email','$place','$security','$ans')";
            insert($sql);
            $sql2 = "insert into crime_login values('$email','$password',2,1,'$security','$ans','$photo')";
            insert($sql2);
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Success!',
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
                    window.location.replace('../');
                })
            </script>
    <?php

        }
    }
    ?>
</body>

</html>