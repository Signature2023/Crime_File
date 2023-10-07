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
                                        <form action="./php/lostfound_action.php" method="POST" enctype="multipart/form-data">
                                            <ul class="profile-edit-list row">
                                                <li class="weight-500 col-md-12">
                                                <div class="form-group">
                                                        <label>Event</label>
                                                        <input class="form-control form-control-lg" type="text" name="event" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lost date and time</label>
                                                        <input class="form-control form-control-lg date-picker" type="date" name="ldate">
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