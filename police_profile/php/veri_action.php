<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('../connect.php');//import external file
    if (isset($_POST['verifications'])) {
        //submit button name
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender']; 
        $dob = $_POST['dob'];
        $mobile_no = $_POST['mobile_no'];
        $aadhaar = $_POST['aadhaar'];
        $hno =  $_POST['hno'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $district = $_POST['district'];

        $sql = "INSERT INTO verifications (fname, lname, gender, dob, mobile_no, aadhaar, hno, pincode, state, district, veri_status)
         VALUES ('$fname','$lname','$gender','$dob','$mobile_no','$aadhaar','$hno','$pincode','$state','$district',0)";
        insert($sql);

        if ($conn->query($sql) === TRUE) {
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Report submitted successfully!',
                }).then((result) => {
                    window.location.replace('../index.php');
                })
            </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error occurred while submitting report!',
                }).then((result) => {
                    window.location.replace('../error.html');
                })
            </script>
            <?php
        }
    }
    ?>
</body>

</html>
