<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="cart">
    <main>


        <section id="cart_header">
            <div id="pageloader">
                <div class="loader"></div>
            </div>
            <div class="contain-fluid">
                <div class="inside">
                    <div class="logo">
                        <a href="<?= $base_url ?>index.php">
                            <img src="<?= $base_url ?>assets/images/logo_simple.svg" alt="">
                        </a>
                    </div>
                    <ul class="top_bar">
                        <li>
                            <a href="<?= $base_url ?>cart.php">
                                <strong class="num"><img src="<?= $base_url ?>assets/images/check.svg" alt=""></strong>
                                <span>Cart</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $base_url ?>shipping.php">
                                <strong class="num"><img src="<?= $base_url ?>assets/images/check.svg" alt=""></strong>
                                <span>Shipping</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $base_url ?>payment.php" class="current">
                                <strong class="num">3</strong>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <strong class="num">4</strong>
                                <span>Review</span>
                            </a>
                        </li>
                    </ul>
                    <div class="secure_blk">
                        <img src="<?= $base_url ?>assets/images/icon-lock.svg" alt="">
                        <span>Secure <br> Checkout</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart_header -->


        <section id="cart" class="sec_pad_top">
            <div class="contain-fluid">
                <form action="<?= $base_url ?>review-order.php" method="POST">
                    <button type="button" id="summary_btn" class="site_btn simple stroke w-100" data-view="Show order summary" data-hide="Hide order summary">
                        <img src="<?= $base_url ?>assets/images/icon-basket.svg" alt="">
                    </button>
                    <div class="row shopping_row">
                        <div class="col-xl-3" id="summary_blk">
                            <div class="top_heading side_head">
                                <h3 class="mb-3">Order Summary</h3>
                                <div class="btn_blk">
                                    <a href="javascript:void(0)" class="link_btn" id="discount_btn">Discount or Gift Card</a>
                                </div>
                                <div class="form_blk input discount_blk">
                                    <input type="text" name="" id="" class="input" placeholder="Enter discount code">
                                    <button type="button" class="site_btn md">Add Code</button>
                                </div>
                            </div>
                            <div class="cart_side_blk">
                                <table class="w-100 fs_6">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <div class="free_ship"><img src="<?= $base_url ?>assets/images/icon-truck.svg" alt=""> $2.03 away from &nbsp;<strong>Free Shipping!</strong></div>
                                            </td>
                                        </tr>
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
                                            <td colspan="2">
                                                <div class="info_blk">
                                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="" class="me-3">
                                                    <span class="small">Estimated delivery & tax for 17857</span>
                                                </div>
                                            </td>
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
                        <div class="col-xl-9">
                            <div class="top_heading top_head">
                                <div class="txt">
                                    <h3>Payment Information</h3>
                                    <h6 class="mb-0 opacity-50">All fields required unless otherwise noted</h6>
                                </div>
                            </div>
                            <div class="payment_info_blk">
                                <h6 class="font_1">Payment Method:</h6>
                                <p>Credit or debit card</p>
                                <div class="credit_card_bar mb-4">
                                    <div class="lbl_btn align-items-center fs_6 fw_600">
                                        Credit Card/Debit Card
                                    </div>
                                    <div class="cards_fig">
                                        <img src="<?= $base_url ?>assets/images/payment_visa.svg" alt="">
                                        <img src="<?= $base_url ?>assets/images/payment_master.svg" alt="">
                                        <img src="<?= $base_url ?>assets/images/payment_amex.svg" alt="">
                                        <img src="<?= $base_url ?>assets/images/payment_discover.svg" alt="">
                                    </div>
                                    <span class="ms-3">and more...</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form_blk dropdown">
                                            <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Select Card On File</button>
                                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="add_new_credit" class="py-4">
                                    <h6 class="font_1">Credit or Debit Card:</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 1234567899696">
                                                <label>Card Number</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 12/2030">
                                                <label class="require">Exp MM/ YY</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: John Wick">
                                                <label>Name on Card</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 345434">
                                                <label class="require">Security Code</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="save_card" id="save_card">
                                                <label for="save_card">Save this card for future payment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_blk mb-3">
                                    <button class="link_btn color plus">Add New Credit Card</button>
                                </div>
                                <div class="affirm_bar fs_6">
                                    <img src="<?= $base_url ?>assets/images/cross.svg" alt="">
                                    Pay with <div class="affirm_logo"><img src="<?= $base_url ?>assets/images/affirm.svg" alt=""></div>
                                    <div class="info_blk ms-auto pop_btn" data-popup="affirm">
                                        <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="" class="me-0">
                                    </div>
                                </div>
                                <p class="opacity-75 form_blk mt-4">Order total must be over $100</p>
                                <hr>
                                <div class="billing_address">
                                    <h6 class="font_1">Billing Address:</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="same_shipping" id="same_shipping">
                                                <label for="same_shipping">Same as shipping address</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="differ_shipping" id="differ_shipping">
                                                <label for="differ_shipping">Use a different billing address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="add_new_billing" class="pt-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: John">
                                                    <label>First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                                    <label>Last Name</label>
                                                </div>
                                                <button class="link_btn color plus">Add Company</button>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: 123 Main Street, California">
                                                    <label>Billing Address</label>
                                                </div>
                                                <button class="link_btn color plus">Address Line 2</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: BL0 0WY">
                                                    <label class="require">Zip Code</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: California">
                                                    <label>City</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form_blk form-floating">
                                                    <input type="text" name="" id="" class="input" placeholder="eg: Sheffield">
                                                    <label class="require">State</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form_blk form-floating">
                                                    <select name="" id="" class="input">
                                                        <option value="">Select</option>
                                                        <option value="232">United Kingdom</option>
                                                        <option value="232">United Kingdom</option>
                                                        <option value="232">United Kingdom</option>
                                                        <option value="232">United Kingdom</option>
                                                        <option value="232">United Kingdom</option>
                                                        <option value="232">United Kingdom</option>
                                                    </select>
                                                    <label>Country</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="font_1">Contact Info:</h6>
                                <p>Receive your order confirmation email and get updates on the status of your order.</p>
                                <p>An order confirmation email will be sent to: <b> bradleymartin852@gmail.com </b></p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form_blk">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="spe_offers" id="spe_offers">
                                                <label for="spe_offers">Email me promotions and special offers</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                            <label>Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form_blk">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="order_status" id="order_status">
                                                <label for="order_status">Send me order status updates to my mobile number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form_blk">
                                            <div class="lbl_btn">
                                                <input type="checkbox" name="exclusive" id="exclusive">
                                                <label for="exclusive">Get exclusive offers via SMS to your mobile number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_blk mt-5">
                                    <button type="submit" class="site_btn w-100">Continue to Review Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="top_heading side_head">
                                <h3 class="mb-3">Order Summary</h3>
                                <div class="btn_blk">
                                    <a href="javascript:void(0)" class="link_btn" id="discount_btn">Discount or Gift Card</a>
                                </div>
                                <div class="form_blk input discount_blk">
                                    <input type="text" name="" id="" class="input" placeholder="Enter discount code">
                                    <button type="button" class="site_btn md">Add Code</button>
                                </div>
                            </div>
                            <div class="cart_side_blk">
                                <table class="w-100 fs_6">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <div class="free_ship"><img src="<?= $base_url ?>assets/images/icon-truck.svg" alt=""> $2.03 away from &nbsp;<strong>Free Shipping!</strong></div>
                                            </td>
                                        </tr>
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
                                            <td colspan="2">
                                                <div class="info_blk">
                                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="" class="me-3">
                                                    <span class="small">Estimated delivery & tax for 17857</span>
                                                </div>
                                            </td>
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
                </form>
            </div>
            <div class="popup" data-popup="affirm">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="font_1 fw_700">Affirm purchase eligibility</h3>
                                        <p>Affirm is available on eligible purchases $100.00 - $15,000.00, including tax.</p>
                                        <p>To buy with Affirm, your cart can contain only eligible items. Here's a list of items and services currently not eligible for Affirm:</p>
                                        <p>&nbsp;</p>
                                        <h3 class="font_1 fw_700">Ineligible items</h3>
                                        <p>Affirm is available on eligible purchases $100.00 - $15,000.00, including tax.</p>
                                        <p>To buy with Affirm, your cart can contain only eligible items. Here's a list of items and services currently not eligible for Affirm:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart -->


        <script>
            $(window).on("load", function() {
                $(document).on("click", "#add_new_address_btn", function() {
                    $(this).hide();
                    $("#new_address_blk").slideDown();
                });
            });
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>