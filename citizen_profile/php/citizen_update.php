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
    if (isset($_POST['citizen_update'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $aadhaar = $_POST['aadhaar_card'];
        $hno = $_POST['hno'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $citizen_id = $_POST['citizen_id'];



        $sql = "update citizen_reg set fname='$fname',lname='$lname',gender='$gender',dob='$dob',mobile='$mobile',aadhaar_card='$aadhar',hno='$hno',pincode='$pincode',state='$state',district='$district',citizen_id='$citizen_id' where email='$email'";
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