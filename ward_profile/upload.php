<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php');
    session_start();
    $email = $_SESSION['email'];
    if (isset($_POST['profile_pic'])) {
       // $userId = $_POST['userId'];
        $selfpic = $_POST['selfpic'];

        $filename = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"];
        $folder = "img/" . $filename;
        $delfolder = "img/" . $selfpic;

        if($filename !=  null)
        {
            $newpic = $filename;
        }
        else
        {
            $newpic=$selfpic;
        }
        $sql = "update crime_login set  image='$newpic' where email = '$email'";
        if (update($sql)) {
            if($filename !=  null)
        {
            if($selfpic != "photo1.jpeg"){
                unlink($delfolder);
            }
            
            move_uploaded_file($tempname, $folder);
        }
             
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Updated Successfully',
                }).then((result) => {
                    window.location.replace('profile.php');
                })
            </script>
        <?php
        } else {
            echo "Profile pic not successfully!";
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Updation Failed',
                }).then((result) => {
                    window.location.replace('profile.php');
                })
            </script>
    <?php

        }
    }
    ?>
</body>

</html>