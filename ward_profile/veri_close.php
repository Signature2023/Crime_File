<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Verifications</title>
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
                                <h4>Verifications</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Verifications</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Mobile number</th>
                                <th scope="col">Aadhaar</th>
                                <th scope="col">House number</th>
                                <th scope="col">Pincode</th>
                                <th scope="col">State</th>
                                <th scope="col">District</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // require('../php/connect.php');
                            $sql = "SELECT * FROM verifications WHERE veri_status = '2'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["fname"] . "</td>";
                                    echo "<td>" . $row["lname"] . "</td>";
                                    echo "<td>" . $row["gender"] . "</td>";
                                    echo "<td>" . $row["dob"] . "</td>";
                                    echo "<td>" . $row["mobile_no"] . "</td>";
                                    echo "<td>" . $row["aadhaar"] . "</td>";
                                    echo "<td>" . $row["hno"] . "</td>";
                                    echo "<td>" . $row["pincode"] . "</td>";
                                    echo "<td>" . $row["state"] . "</td>";
                                    echo "<td>" . $row["district"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No closed verifications.</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="footer-wrap pd-20 mb-20 card-box">
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