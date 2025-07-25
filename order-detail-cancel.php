<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Detail — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="order_detail" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="top_head mb-5 pb-3">
                    <h5 class="font_1 fw_700 mb-0 back_btn_heading"><a href="<?= $base_url ?>account.php">Account</a></h5>
                </div>
                <div class="in_blk">
                    <ul class="data_list">
                        <li><span>Order ID</span><strong>9166799832560</strong></li>
                        <li><span>Order Date</span><strong>Apr 13, 2022</strong></li>
                        <li><span>Total</span><strong>$ 400.95</strong></li>
                        <li><span>Payment Status</span><strong>Paid</strong></li>
                        <li><span>Order Status</span><strong>Processing</strong></li>
                    </ul>
                    <div class="head">
                        <div class="track">
                            <a href="<?= $base_url ?>track-order.php">
                                <span class="fs_6 fw_600 color">Order Tracking:</span>
                                <span>Exp. Delivery : Apr 15, 2022</span>
                            </a>
                        </div>
                        <div class="invoice">
                            <span class="fs_6 fw_600 color">Invoice:</span>
                            <span>Status: Paid</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn px pop_btn mobile_100" data-popup="cancel-reason">Cancel 4 Items</button>
                            <button type="button" class="site_btn simple stroke px mobile_100">Select Entire Order</button>
                        </div>
                    </div>
                    <div class="remove_alert fs_6 fw_600">
                        4 Selected
                        <img src="<?= $base_url ?>assets/images/icon-trash-alt.svg" alt="">
                    </div>
                    <div class="order_table">
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="" checked>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="" checked>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="" checked>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="" checked>
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
                                            <input type="checkbox" name="" id="">
                                            <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                                            <div class="txt">
                                                <h6 class="font_1 mb-4">Project 7 Low Sugar Candy</h6>
                                                <div class="price">$13.33</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Qty 1</td>
                                    <td>
                                        <div class="price">$ 132.95</div>
                                    </td>
                                    <td><span class="fw_600">Reorder</span></td>
                                    <td width="40"><a href="?" class="link_btn">View This Product</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="cancel-reason">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-7 col-sm-9">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Select Cancel Reason</h3>
                                        <form action="<?= $base_url ?>orders.php" method="POST">
                                            <ul class="ctg_list fw_500">
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Needed it sooner</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">No longer want the item</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Ordered it somewhere else</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Ordered wrong item</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Used wrong payment method</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Item too expensive</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" id="" name="">Other</label>
                                                </li>
                                            </ul>
                                            <div class="btn_blk mt-5 pt 3">
                                                <button type="submit" class="site_btn w-100">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- order_detail -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>