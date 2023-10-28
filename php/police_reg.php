<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php');
    if (isset($_POST['police_reg'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];   
        $dob = $_POST['dob'];
        $mobile_no = $_POST['mobile_no'];
        $hn = $_POST['hn'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $city = $_POST['city'];
        $experience= $_POST['experience'];
        $designation= $_POST['designation'];
        $station_name= $_POST['station_name'];
        $pid = $_POST['pid'];
        $security = $_POST['security'];
        $ans = $_POST['ans'];
        $password=$_POST['password'];

        $sql = "select * from crime_login where email='$email'";
        if (num($sql) == 0) {
            $sql = "insert into police_reg values('$fname','$lname','$gender','$email','$dob','$mobile_no','$hn','$pincode','$state','$district','$city','$experience','$designation','$station_name','$pid','$security','$ans')";
            echo $sql;
            insert($sql);
            $sql2 = "insert into crime_login values('$email','$password',0,1,'$security','$ans')";
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
                    window.location.replace('../../');
                })
            </script>
    <?php

        }
    }
    ?>
</body>

</html>