<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Profile — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="profile" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <ul class="bread_crumb simple">
                            <li><a href="<?= $base_url ?>account.php">Account</a></li>
                            <li>Addresses</li>
                        </ul>
                        <div class="txt mb-5">
                            <h5 class="font_1 fw_700 m-0">My Profile</h5>
                        </div>
                        <div class="gray_box">
                            <div class="row flex_row">
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">About Me</h6>
                                        <div class="txt">
                                            <p>Zane Booker</p>
                                        </div>
                                        <div class="data">
                                            <div class="inner mb-4">
                                                <div class="flexi">
                                                    <div class="ico">2022</div>
                                                    <div class="txt">
                                                        <p><strong>Traveling to your Sweet Spot since.</strong></p>
                                                        <p>Thank you for joining us on this sweet journey</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?= $base_url ?>edit-profile.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Communication Preferences</h6>
                                        <div class="back">
                                            <p>News and Updates</p>
                                            <p>Coupons and Promotions</p>
                                            <p>Account and Order Info</p>
                                        </div>
                                        <div class="data">
                                            <div class="inner">
                                                <div class="switch_blk align-items-start">
                                                    <div class="txt">
                                                        <p><strong>Cultural Candy News and Community Updates</strong></p>
                                                        <p>Receive news and updates about our mission to bridge the world with cultural candy</p>
                                                    </div>
                                                    <div class="switch">
                                                        <input type="checkbox" name="" id="">
                                                        <em></em>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="switch_blk align-items-start">
                                                    <div class="txt">
                                                        <p><strong>Coupons & Promotions </strong></p>
                                                        <p>Saving you $$$</p>
                                                    </div>
                                                    <div class="switch">
                                                        <input type="checkbox" name="" id="">
                                                        <em></em>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="switch_blk align-items-start">
                                                    <div class="txt">
                                                        <p><strong>Account and Order Information </strong></p>
                                                        <p>Receive important information about your order and account</p>
                                                    </div>
                                                    <div class="switch">
                                                        <input type="checkbox" name="" id="">
                                                        <em></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Sign-in and Security</h6>
                                        <div class="txt">
                                            <p>Password********</p>
                                        </div>
                                        <div class="data">
                                            <div class="inner mb-4">
                                                <div class="flexi">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/vector-shield.svg" alt=""></div>
                                                    <div class="txt">
                                                        <p><strong>Password</strong></p>
                                                        <p>Click the edit button below to update your password</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?= $base_url ?>edit-password.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Email & Phone Number Details</h6>
                                        <div class="txt">
                                            <p><a href="mailto:bradleymartin852@gmail.com">bradleymartin852@gmail.com</a></p>
                                            <p>Mobile phone not added</p>
                                        </div>
                                        <div class="data">
                                            <a href="<?= $base_url ?>edit-profile-security.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>