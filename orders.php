<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Orders — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="orders" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="top_head mb-5 pb-3">
                    <h5 class="font_1 fw_700 mb-0 back_btn_heading"><a href="<?= $base_url ?>account.php">Account</a></h5>
                </div>
                <form action="" method="POST" class="mb-5 pb-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="form_blk input">
                                <input type="text" name="" id="" class="input" placeholder="Search by Order ID or Product">
                                <button type="submit" class="ico_btn"><img src="<?= $base_url ?>assets/images/icon-search2.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form_blk dropdown">
                                <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">Order Status</button>
                                <ul class="dropdown-menu dropdown-menu-end w-100">
                                    <li><button type="button">All</button></li>
                                    <li><button type="button">Processing</button></li>
                                    <li><button type="button">Cancelled</button></li>
                                    <li><button type="button">Pending Payment</button></li>
                                    <li><button type="button">Ready To Ship</button></li>
                                    <li><button type="button">Delivered</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form_blk dropdown">
                                <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">Date</button>
                                <ul class="dropdown-menu dropdown-menu-end w-100">
                                    <li><button type="button">All Dates</button></li>
                                    <li><button type="button">Last 30 Days</button></li>
                                    <li><button type="button">Last 90 Days</button></li>
                                    <li><button type="button">Current Year</button></li>
                                    <li><button type="button">Custom Date Range</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="order_blk process">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <h6 class="font_1 fw_700">Jan 31, 2021</h6>
                            <p>$22.94</p>
                            <p>9166799832560</p>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <div class="head">
                                <h6 class="font_1 fw_700 mb-0">Processing</h6>
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>order-detail.php" class="link_btn">View order</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_blk deliver">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <h6 class="font_1 fw_700">Jan 31, 2021</h6>
                            <p>$22.94</p>
                            <p>9166799832560</p>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <div class="head">
                                <h6 class="font_1 fw_700 mb-0">Delivered</h6>
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>order-detail.php" class="link_btn">View order</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_blk cancel">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <h6 class="font_1 fw_700">Jan 31, 2021</h6>
                            <p>$22.94</p>
                            <p>9166799832560</p>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <div class="head">
                                <h6 class="font_1 fw_700 mb-0">Cancelled</h6>
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>order-detail.php" class="link_btn">View order</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_blk cancel">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <h6 class="font_1 fw_700">Jan 31, 2021</h6>
                            <p>$22.94</p>
                            <p>9166799832560</p>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <div class="head">
                                <h6 class="font_1 fw_700 mb-0">Cancelled</h6>
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>order-detail.php" class="link_btn">View order</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                        </div>
                                        <span class="badge">2</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="fig">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>