<?php
require('header.php');
?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Others</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Others</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <?php

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM notifications WHERE eve_status = 2";
                $result = mysqli_query($conn, $sql);
                ?>

                <div class="container pd-0">
                    <div class="timeline mb-30">
                        <ul>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <li>
                                        <div class="timeline-date">
                                            <?php echo date_format(date_create($row["edate"]), 'd M Y'); ?>
                                            <?php echo date_format(date_create($row["edate"]), 'h:i A'); ?>
                                        </div>
                                        <div class="timeline-desc card-box">
                                            <div class="pd-20">
                                                <h4 class="mb-10 h4"><?php echo $row["descr"]; ?></h4>
                                                <!-- Additional content can be added here if needed -->
                                            </div>
                                        </div>
                                    </li>
                            <?php
                                }
                            } else {
                                echo "0 results found";
                            }
                            $conn->close();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
            require('footer.php');
            ?>