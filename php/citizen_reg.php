<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('../php/connect.php'); //import external file
    if (isset($_POST['citizen_reg'])) {
        //submit button name
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile_no'];
        $aadhaar_card = $_POST['aadhaar_card'];
        $hno =  $_POST['house_number'];
        $pincode = $_POST['pin_code'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $citizen_id = $_POST['cid'];
        $security = $_POST['security'];
        $ans = $_POST['ans'];
        $password = $_POST['password'];
        $photo_path = "../citizen_profile/img/photo1.jpeg";
        $photo = basename($photo_path);

        $sql = "select * from crime_login where email='$email'";
        if (num($sql) == 0) {
            $sql = "insert into citizen_reg values('$fname','$lname','$gender','$email','$dob','$mobile','$aadhaar_card','$hno','$pincode','$state','$district','$citizen_id','$security','$ans')";
            insert($sql);
            $sql2 = "insert into crime_login values('$email','$password',1,1,'$security','$ans','$photo')";
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