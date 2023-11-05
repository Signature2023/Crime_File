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
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <div class="nav nav-tabs customtab" role="tablist">

                                    <h4 class="text-blue h5" style="margin:15px;">Notifications</h4>
                                </div>
                                <div class="tab-content">


                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->

                                    <div class="profile-setting">
                                        <form action="./php/noti_action.php" method="POST" enctype="multipart/form-data">
                                            <ul class="profile-edit-list row">
                                                <li class="weight-500 col-md-12">
                                                <div class="form-group">
                                                        <label>Event Name</label>
                                                        <input class="form-control form-control-lg" type="text" name="ename" >
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Event type</label>
                                                        <select name="etype" id="etype" class="form-control form-control-lg ">
                                                            <option value="criminal">Criminal</option>
                                                            <option value="political">Political</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <input class="form-control form-control-lg " type="text" name="location">
                                                    </div>

                                                     <div class="form-group">
                                                        <label>Description</label>
                                                        <input class="form-control form-control-lg" type="text" name="descr">
                                                    </div>
                                                   

                                                    <div class="form-group mb-0">
                                                        <!-- <input type="submit" name="add_accident" class="btn btn-primary" value="submit"> -->
                                                        <input name="add_noti" type="submit" class="btn btn-primary" value="submit">
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