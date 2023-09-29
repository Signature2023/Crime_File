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
                            <h4>blank</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blank</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with Export Buttons</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Full Name</th>
									<th class="table-plus datatable-nosort">Ward No</th>
                                    <th class="table-plus datatable-nosort">Ward Name</th>
                                    <th class="table-plus datatable-nosort">Gender</th>
                                    <th class="table-plus datatable-nosort">Email</th>
                                    <th class="table-plus datatable-nosort">Place</th>
								</tr>
							</thead>
							<tbody>
                                <?php
                                $sql = "select * from ward_reg";
                                $res = sel($sql);
                                while($row = mysqli_fetch_assoc($res)) {
                                ?>
								<tr>
									<td class="table-plus"><?php echo $row['fname'];?></td>
                                    <td class="table-plus"><?php echo $row['ward_no'];?></td>
                                    <td class="table-plus"><?php echo $row['ward_name'];?></td>
                                    <td class="table-plus"><?php echo $row['gender'];?></td>
                                    <td class="table-plus"><?php echo $row['email'];?></td>
                                    <td class="table-plus"><?php echo $row['place'];?></td>

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