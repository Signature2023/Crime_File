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
                            <h4>Accident Report</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Accident Report </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            <div class="profile-tab height-100-p">
                <div class="tab height-100-p">
                    <div class="nav nav-tabs customtab" role="tablist">

                        <h4 class="text-blue h5" style="margin:15px;">Submit Accident Details</h4>
                    </div>
                    <div class="tab-content">


                        <!-- Tasks Tab End -->
                        <!-- Setting Tab start -->

                        <div class="profile-setting">
                            <form action="./php/accident_action.php" method="POST" enctype="multipart/form-data">
                                <ul class="profile-edit-list row">
                                    <li class="weight-500 col-md-12">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control form-control-lg" type="text" name="location">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control form-control-lg" type="text" name="descr">
                                        </div>


                                        <!-- <div class="form-group">
                                                        <label>Mobile No</label>
                                                        <input class="form-control form-control-lg date-picker" type="text" name="mobile" value="<?php echo $mobile ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>House No</label>
                                                        <input class="form-control form-control-lg" type="text" name="hno" value="<?php echo $hno ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pincode</label>
                                                        <input class="form-control form-control-lg" type="text" name="pincode" value="<?php echo $pincode ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input class="form-control form-control-lg" type="text" name="state" value="<?php echo $state ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <input class="form-control form-control-lg" type="text" name="district" value="<?php echo $district ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Citizen ID</label>
                                                        <input class="form-control form-control-lg" type="text" name="citizen_id" value="<?php echo $citizen_id ?>">
                                                    </div> -->

                                        <div class="form-group mb-0">
                                            <!-- <input type="submit" name="add_accident" class="btn btn-primary" value="submit"> -->
                                            <input name="add_accident" type="submit" class="btn btn-primary" value="submit">
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <!-- Setting Tab End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
require('footer.php');
?>