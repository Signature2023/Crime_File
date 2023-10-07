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
    require('../../php/connect.php'); // Include the database connection file

    if (isset($_POST['add_lostfound'])) {
        $name = $_POST['name'];
        $ldate = $_POST['ldate'];
        $categ = $_POST['categ'];
        // $photo = $_POST['photo'];
        $descr = $_POST['descr'];
        $email = $_SESSION['email'];

        // File upload configuration
        if (!file_exists('uploads/')) {
            mkdir('uploads/', 0777, true);
        }

        $targetDir = "uploads/";
        $fileName = basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
                // Insert data into the database
                $sql = "INSERT INTO lost_found (name, ldate, categ, photo, descr, email) 
                        VALUES ('$name', '$ldate', '$categ', '$fileName', '$descr', '$email')";

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
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred while uploading file!',
                    }).then((result) => {
                        window.location.replace('../error.html');
                    })
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid file format! Allowed formats: JPG, JPEG, PNG, GIF',
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