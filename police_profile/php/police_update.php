<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    $email = $_SESSION['email'];
    require('../../php/connect.php');
    if (isset($_POST['police_update'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobile_no = $_POST['mobile_no'];
        $hn = $_POST['hn'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $city = $_POST['city'];
        $experience = $_POST['experience'];
        $designation = $_POST['designation'];
        $station_name = $_POST['station_name'];
        $pid = $_POST['pid'];



        $sql = "update police_reg set fname='$fname',lname='$lname',gender='$gender',dob='$dob',mobile_no='$mobile_no',hn='$hn',pincode='$pincode',state='$state',district='$district',city='$city',experience='$experience',designation='$designation',station_name='$station_name',pid='$pid' where email='$email'";
        update($sql);

    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Updated !',
            }).then((result) => {
                window.location.replace('../profile.php');
            })
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
            }).then((result) => {
                window.location.replace('../profile.php');
            })
        </script>
    <?php


    }
    ?>
</body>

</html>