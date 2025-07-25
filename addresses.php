<!DOCTYPE html>
<html lang="en">

<head>
    <title>Addresses — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="address" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <ul class="bread_crumb simple">
                            <li><a href="<?= $base_url ?>account.php">Account</a></li>
                            <li>Addresses</li>
                        </ul>
                        <div class="top_head mb-5">
                            <h5 class="font_1 fw_700 m-0">Addresses</h5>
                            <div class="btn_blk">
                                <a href="<?= $base_url ?>add-new-address.php" class="site_btn mobile_100">Add New Address</a>
                            </div>
                        </div>
                        <div class="gray_box">
                            <div class="row flex_row">
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Ben Mishkin</h6>
                                        <div class="txt">
                                            <p>7004 E Ohio Dr Denver, Co 80224-1535</p>
                                            <div class="btn_blk">
                                                <span class="label green">Default shipping</span>
                                                <span class="label green">Last used address</span>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <p>Delivery Instructions: Minima blanditiis provident et saepe maxime et saepe maxime</p>
                                            <hr>
                                            <a href="<?= $base_url ?>edit-address.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                            <hr>
                                            <button type="button" class="sm_btn pop_btn" data-popup="remove"><img src="<?= $base_url ?>assets/images/icon-trash.svg" alt="">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Joe Blow</h6>
                                        <div class="txt">
                                            <p>6179 S Fulton St Englewood, CO 80111-5426</p>
                                            <div class="btn_blk">
                                                <span class="label theme"><img src="<?= $base_url ?>assets/images/icon-user-circle.svg" alt=""> Set as Default Shipping </span>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <p>Delivery Instructions: Minima blanditiis provident et saepe maxime et saepe maxime</p>
                                            <hr>
                                            <a href="<?= $base_url ?>edit-address.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                            <hr>
                                            <button type="button" class="sm_btn pop_btn" data-popup="remove"><img src="<?= $base_url ?>assets/images/icon-trash.svg" alt="">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">Brent Phillips</h6>
                                        <div class="txt">
                                            <p>6179 S Fulton St Englewood, CO 80111-5426</p>
                                            <div class="btn_blk">
                                                <span class="label theme"><img src="<?= $base_url ?>assets/images/icon-user-circle.svg" alt=""> Set as Default Shipping </span>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <p>Delivery Instructions: Minima blanditiis provident et saepe maxime et saepe maxime</p>
                                            <hr>
                                            <a href="<?= $base_url ?>edit-address.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                            <hr>
                                            <button type="button" class="sm_btn pop_btn" data-popup="remove"><img src="<?= $base_url ?>assets/images/icon-trash.svg" alt="">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accord_blk">
                                        <h6 class="title font_1">John Wick</h6>
                                        <div class="txt">
                                            <p>6179 S Fulton St Englewood, CO 80111-5426</p>
                                            <div class="btn_blk">
                                                <span class="label theme"><img src="<?= $base_url ?>assets/images/icon-user-circle.svg" alt=""> Set as Default Shipping </span>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <p>Delivery Instructions: Minima blanditiis provident et saepe maxime et saepe maxime</p>
                                            <hr>
                                            <a href="<?= $base_url ?>edit-address.php" class="sm_btn"><img src="<?= $base_url ?>assets/images/icon-edit.svg" alt="">Edit</a>
                                            <hr>
                                            <button type="button" class="sm_btn pop_btn" data-popup="remove"><img src="<?= $base_url ?>assets/images/icon-trash.svg" alt="">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="remove">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-5 col-sm-6">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Remove Address</h3>
                                        <p>Are you sure you want to remove Zane Booker, <strong>519 White Nobel Avenue,</strong> Schenectady, <strong>NY 12345</strong> from your account?</p>
                                        <div class="btn_blk mt-5 pt 3">
                                            <button type="button" class="site_btn simple stroke flex-grow-1">No</button>
                                            <button type="button" class="site_btn flex-grow-1">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- address -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>