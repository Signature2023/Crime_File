<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Accident Reports</title>
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
</head>

<body>
    <?php require('header.php'); ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Accident Reports</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Accident Reports</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Complaint ID</th>
                                <th scope="col">Description</th>
                                <th scope="col">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // require('../php/connect.php');

                            $sql = "SELECT * FROM accident_reports WHERE acc_status = '2'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["CID"] . "</td>";
                                    echo "<td>" . $row["descr"] . "</td>";
                                    echo "<td>" . $row["sdate"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No closed accidents found.</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="footer-wrap pd-20 mb-20 card-box">
                    Accident Reports - Powered by Your Crime Files
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>