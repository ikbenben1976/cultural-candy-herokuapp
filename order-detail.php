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
                            <a href="<?= $base_url ?>order-detail-cancel.php" class="site_btn simple stroke px mobile_100">Cancel Items</a>
                        </div>
                    </div>
                    <div class="order_table">
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    <td width="40%">
                                        <div class="prod_blk">
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
        </section>
        <!-- order_detail -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>