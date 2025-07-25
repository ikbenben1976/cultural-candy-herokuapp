<!DOCTYPE html>
<html lang="en">

<head>
    <title>Track Order — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="track" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="top_head mb-5 pb-3">
                    <h5 class="font_1 fw_700 mb-0 back_btn_heading"><a href="<?= $base_url ?>orders.php">Back to Orders</a></h5>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row flex_row">
                            <div class="col-md-12">
                                <div class="inner">
                                    <h6 class="font_1">Estimated Delivery: <span class="fw_400 opacity-50">Apr 20, 2022</span></h6>
                                    <p>Arrived at FedEx location</p>
                                    <ul class="track_list text-center">
                                        <li class="active">
                                            <div class="txt">
                                                <strong>Ordered</strong>
                                                <span>Tue, Jul 10</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="txt">
                                                <strong>Shipped</strong>
                                                <span>Thu, Jul 12</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="txt">
                                                <strong>Expected Delivery</strong>
                                                <span>Tue, Jul 17</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner_wrap">
                                    <div class="inner">
                                        <h5 class="font_1">Shipment Information</h5>
                                        <table class="ship_info_tbl">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Delivery Method</strong></td>
                                                    <td>FedEx Home Delivery</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Carrier</strong></td>
                                                    <td>FedEx 800-GO-FEDEX (463.3339)</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tracking #</strong></td>
                                                    <td><strong>090210916421353</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Shipping to</strong></td>
                                                    <td>Ben Mishkin <br> 7004 E Ohio Drive <br> Denver, CO 80224</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Order ID</strong></td>
                                                    <td>9166799832560</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="inner shipment_type">
                                        <h5 class="font_1">Learn How We Protect Your Shipment</h5>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-box.svg" alt=""></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift.svg" alt=""></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        <div class="ico_blk">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/vector-sunday.svg" alt=""></div>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/vector-monday.svg" alt=""></div>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/vector-tuesday.svg" alt=""></div>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/vector-wednesday.svg" alt=""></div>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/vector-thursday.svg" alt=""></div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-box.svg" alt=""></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner track_history">
                                    <div class="switch_blk justify-content-end">
                                        <span>Receive Text Updates</span>
                                        <div class="switch">
                                            <input type="checkbox" name="" id="">
                                            <em></em>
                                        </div>
                                    </div>
                                    <h5 class="font_1">Track History</h5>
                                    <p class="fw_600">Please note: It’s normal for on-time packages to go a few days without being scanned</p>
                                    <div class="date fs_6 fw_600">Thu, Apr 20, 2022</div>
                                    <table class="fw_600 w-100">
                                        <tbody>
                                            <tr>
                                                <td>11:52 PM</td>
                                                <td>
                                                    CITY OF INDUSTRY, CA, US
                                                    <br>
                                                    <small>Arrived at FedEx location</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>07:22 PM</td>
                                                <td>
                                                    CITY OF INDUSTRY, CA, US
                                                    <br>
                                                    <small>Picked up</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11:41 AM</td>
                                                <td>
                                                    US
                                                    <br>
                                                    <small>Shipment information sent to Fedex</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cart_side_blk top inner">
                            <h5 class="font_1">Order Summary</h5>
                            <table class="w-100 fs_6">
                                <tbody>
                                    <tr>
                                        <td>Subtotal <small>(items)</small></td>
                                        <td>$47.97</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td>$7.00</td>
                                    </tr>
                                    <tr>
                                        <td>Taxes</td>
                                        <td>$4.59</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Delivery & tax for 17857</td>
                                    </tr>
                                    <tr class="fw_600">
                                        <td>Discount</td>
                                        <td>-$1.24</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr class="fw_700">
                                        <td>Total</td>
                                        <td>$58.32</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="in_shipment mt-5 pt-3">
                    <div class="top_head flex-row">
                        <h5 class="font_1">Items in Shipment</h5>
                        <div class="btn_blk">
                            <a href="?" class="link_btn">View All</a>
                        </div>
                    </div>
                    <div class="shipment_wrap">
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                        <div class="mini_product_blk">
                            <div class="ico">
                                <a href="<?= $base_url ?>product-detail.php">
                                    <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                </a>
                            </div>
                            <div class="txt">
                                <h6 class="font_1"><a href="<?= $base_url ?>product-detail.php">Puchao Four Flavor Fruit Gummy & Soft Candy - 3.53oz</a></h6>
                                <div class="btm">
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <span>33</span>
                                    </div>
                                    <div class="price fs_6 fw_700">$2.49</div>
                                </div>
                            </div>
                            <button type="button" class="like"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- track -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>