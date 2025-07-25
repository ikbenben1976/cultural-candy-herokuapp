<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Payment — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="payment_method" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <ul class="bread_crumb simple">
                            <li><a href="<?= $base_url ?>account.php">Account</a></li>
                            <li><a href="<?= $base_url ?>payment-method.php">Payments</a></li>
                            <li>New</li>
                        </ul>
                        <div class="txt mb-5">
                            <h5 class="font_1 fw_700">Add New Card</h5>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 1234567899696">
                                                <label class="require">Credit card number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 12/2030">
                                                <label class="require">Exp MM/ YY</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: John Wick">
                                                <label>Name as it appears on card</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form_blk switch_blk">
                                                <strong class="fs_5">DEFAULT PAYMENT</strong>
                                                <div class="switch">
                                                    <input type="checkbox" name="" id="">
                                                    <em></em>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form_blk">
                                                <p>Set as default payment</p>
                                                <h5 class="font_1 fw_700">Select as billing address:</h5>
                                            </div>
                                            <div class="form_blk billing_box active">
                                                <div class="txt">
                                                    <div class="title">
                                                        <strong>Zane Booker</strong>
                                                        <div class="label green">Default shipping</div>
                                                    </div>
                                                    <p>519 White Nobel Avenue Schenectady, NY 12345</p>
                                                </div>
                                                <div class="ico"><img src="<?= $base_url ?>assets/images/icon-checkbox.svg" alt=""></div>
                                            </div>
                                            <div class="form_blk billing_box">
                                                <div class="txt">
                                                    <div class="title">
                                                        <strong>John Doe</strong>
                                                    </div>
                                                    <p>200 White Nobel Avenue North Schenectady, NY 1234525</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="add_billing_btn text-center">
                                    <button type="button"><img src="<?= $base_url ?>assets/images/icon-plus.svg" alt=""></button>
                                    <p class="fs_6">Add a New Billing Address</p>
                                </div>
                            </div>
                        </div>
                        <div id="new_billing_address">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: John">
                                            <label class="require">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                            <label class="require">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: 123 Main Street, California">
                                            <label class="require">Address line 1</label>
                                        </div>
                                        <p class="opacity-50"><strong>Delivery Notes:</strong> Packages sent to PO Boxes and APO Installations can only be sent with USPS and may incur an additional charge</p>
                                        <button class="link_btn color plus">Address Line 2</button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: BL0 0WY">
                                            <label class="require">Zip Code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: California">
                                            <label>City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: Sheffield">
                                            <label class="require">State</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                <div class="btn_blk mt-5 pt 3">
                                    <button type="button" class="site_btn simple stroke flex-grow-1">Cancel</button>
                                    <button type="submit" class="site_btn flex-grow-1">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- payment_method -->


        <script>
            $(window).on("load", function() {
                $(document).on("click", '.add_billing_btn button', function() {
                    $("#new_billing_address").slideToggle();
                })
            })
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>