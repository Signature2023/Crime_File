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
                            <h4>Home</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home </li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <!-- <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Reports</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">

                            </nav>
                        </div>

                    </div>
                </div> -->
                <h4 class="h4 text-blue mb-30">Welcome to crime files</h4>
                <div class="card-deck mb-30">
                    <div class="card">
                        <img class="card-img-top" src="vendors/images/img3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Notifications</h5>
                            <p class="card-text">We provide notifications for the safety of people and make awareness among people about events happening in our country</p>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="vendors/images/citi_1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Complaints</h5>
                            <p class="card-text">Citizens are encouraged to register their complaints through Crime Files, providing a user-friendly platform to report incidents and concerns.</p>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="vendors/images/citizen.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Anonymous report</h5>
                            <p class="card-text">Crime Files facilitates anonymous reporting, allowing individuals to share crucial information without revealing their identity.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require('footer.php');
        ?>