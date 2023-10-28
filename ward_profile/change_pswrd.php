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
                            <h4>Change password</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <div class="nav nav-tabs customtab" role="tablist">
                                <h4 class="text-blue h5" style="margin:15px;">Change password</h4>
                            </div>
                            <div class="tab-content">
                                <!-- Lost Item Form Start -->
                                <div class="profile-setting">
                                    <form action="./php/lostfound_action.php" method="POST" enctype="multipart/form-data">
                                        <!-- ... (Lost Item Form fields) ... -->
                                    </form>
                                </div>
                                <!-- Lost Item Form End -->

                                <!-- Change Password Form -->
                                <div class="profile-setting">
                                    <form action="php/changepass.php" method="post">
                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input name="password" type="password" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input name="newpassword" type="password" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-group">
                                                    <label>Re-enter New Password</label>
                                                    <input name="renewpassword" type="password" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <input type="submit" name="profile" class="btn btn-primary" value="Change Password">
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <!-- End Change Password Form -->
                            </div>
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
