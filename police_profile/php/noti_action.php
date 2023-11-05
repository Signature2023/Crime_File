<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
<?php
    require('../../php/connect.php'); // Include the database connection file
    
    

    if (isset($_POST['add_noti'])) {
        $event_name = $_POST['ename'];
        $event_type = $_POST['etype'];
        $location = $_POST['location'];
        $descr = $_POST['descr'];

        // File upload configuration
        // if (!file_exists('uploads/')) {
        //     mkdir('uploads/', 0777, true);
        // }

        // $targetDir = "uploads/";
        // $fileName = basename($_FILES["photo"]["name"]);
        // $targetFilePath = $targetDir . $fileName;
        // $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats

                // Insert data into the database
                if ($event_type == "criminal") {

                $sql = "INSERT INTO notifications (event_name, event_type, location, descr, eve_status) 
                        VALUES (' $event_name','$event_type','$location','$descr',0)";
                        


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
                else if ($event_type == "political") {
                    

                        $sql = "INSERT INTO notifications (event_name, event_type, location, descr, eve_status) 
                                VALUES (' $event_name','$event_type','$location','$descr',1)";
                                
        
        
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
                else if ($event_type == "others") {
                    

                    $sql = "INSERT INTO notifications (event_name, event_type, location, descr, eve_status) 
                            VALUES (' $event_name','$event_type','$location','$descr',2)";
                            
    
    
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