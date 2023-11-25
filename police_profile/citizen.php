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
                            <h4>View Citizen</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Citizen</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Citizens Details</h4>
                    </div>
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">First Name</th>
                                    <th class="table-plus datatable-nosort">Last Name</th>
                                    <th class="table-plus datatable-nosort">Gender</th>
                                    <th class="table-plus datatable-nosort">Email</th>
                                    <th class="table-plus datatable-nosort">Date of Birth</th>
                                    <th class="table-plus datatable-nosort">Mobile No</th>
                                    <th class="table-plus datatable-nosort">House No</th>
                                    <th class="table-plus datatable-nosort">Pincode</th>
                                    <th class="table-plus datatable-nosort">State</th>
                                    <th class="table-plus datatable-nosort">District</th>
                                    <th class="table-plus datatable-nosort">Citizen ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select * from citizen_reg";
                                $res = sel($sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $row['fname']; ?></td>
                                        <td class="table-plus"><?php echo $row['lname']; ?></td>
                                        <td class="table-plus"><?php echo $row['gender']; ?></td>
                                        <td class="table-plus"><?php echo $row['email']; ?></td>
                                        <td class="table-plus"><?php echo $row['dob']; ?></td>
                                        <td class="table-plus"><?php echo $row['mobile']; ?></td>
                                        <td class="table-plus"><?php echo $row['hno']; ?></td>
                                        <td class="table-plus"><?php echo $row['pincode']; ?></td>
                                        <td class="table-plus"><?php echo $row['state']; ?></td>
                                        <td class="table-plus"><?php echo $row['district']; ?></td>
                                        <td class="table-plus"><?php echo $row['citizen_id']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require('footer.php');
        ?>