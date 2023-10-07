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
                        
                    </div>

                </div>
            </div>
            <!-- <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0"><?php echo $fname . " " . $lname ?></h5>
                        <p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    <?php echo $email ?>
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    <?php echo $mobile ?>
                                </li>
                                <li>
                                    <span>District:</span>
                                    <?php echo $district ?> 
                                </li>

                            </ul>
                        </div>

                    </div>
                </div> -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <div class="nav nav-tabs customtab" role="tablist">

                                    <h4 class="text-blue h5" style="margin:15px;">Lost item details</h4>
                                </div>
                                <div class="tab-content">


                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->

                                    <div class="profile-setting">
                                        <form action="./php/accident_action.php" method="POST" enctype="multipart/form-data">
                                            <ul class="profile-edit-list row">
                                                <li class="weight-500 col-md-12">
                                                <div class="form-group">
                                                        <label>Item Name</label>
                                                        <input class="form-control form-control-lg" type="text" name="name" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Submitted Date and time</label>
                                                        <input class="form-control form-control-lg date-picker" type="date" name="sdate">
                                                    </div>
                                                        
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <input class="form-control form-control-lg" type="text" name="categ" >
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Select Photo</label>
                                                    <br/>
                                                    <input type="file" name="photo" required>
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
                                                        <input name="add_lostfound" type="submit" value="submit">
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