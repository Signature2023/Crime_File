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
    if (isset($_POST['ward_update'])) {
        $fname = $_POST['fname']; 
        $ward_no=$_POST['ward_no'];
        $ward_name=$_POST['ward_name'];
        $gender = $_POST['gender'];  
        $place = $_POST['place'];



        $sql = "update ward_reg set fname='$fname', ward_no='$ward_no', ward_name='$ward_name',gender='$gender',place='$place' where email='$email'";
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