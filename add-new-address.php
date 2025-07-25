<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Address — Cultural Candy</title>
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
                            <li><a href="<?= $base_url ?>addresses.php">Addresses</a></li>
                            <li>New</li>
                        </ul>
                        <h5 class="font_1 fw_700">Add New Address</h5>
                        <div class="txt mb-5 pb-3">
                            <ul>
                                <li>Enter your entire street address, including any apartment or suite number, in the Address 1 field</li>
                                <li>Avoid using periods in abbreviations like ‘Apt’ or ‘Ste’</li>
                                <li>Choosing a suggested address will help ensure on-time delivery</li>
                            </ul>
                            <p class="fs_5">APO / FPO address tips</p>
                            <ul>
                                <li>In First name field, also enter your rank</li>
                                <li>In the Address 1 field, enter your unit and box (if available)</li>
                                <li>In the Zip field, enter a 5-digit APO/FPO zip code</li>
                                <li>In the City field, enter APO or FPO</li>
                                <li>In the State dropdown, choose the applicable Armed Forces option</li>
                            </ul>
                        </div>
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
                                <div class="col-md-6">
                                    <div class="form_blk form-floating">
                                        <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                        <label>Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="lbl_btn fw_500 h-100 align-items-center">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Set me as preferred shipping address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_blk form-floating">
                                        <textarea name="" id="" class="input" placeholder="Type something here (optional)"></textarea>
                                        <label>Delivery instructions</label>
                                    </div>
                                    <p>Ex. Please deliver to mailroom</p>
                                </div>
                            </div>
                            <div class="btn_blk mt-5 pt 3">
                                <button type="button" class="site_btn simple stroke flex-grow-1">Cancel</button>
                                <!-- <button type="submit" class="site_btn pop_btn flex-grow-1" data-popup="verify-address">Save</button> -->
                                <button type="button" class="site_btn pop_btn flex-grow-1" data-popup="verify-address">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="verify-address">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Verify Your Address</h3>
                                        <div class="txt fw_500">
                                            <p>We could not verify your shipping address. Check for any errors or missing information.</p>
                                            <p>
                                                Ben Mishkin
                                                <br>
                                                7004 E Ohio Drive
                                                <br>
                                                <strong>Denver, CO 80224-1535</strong>
                                            </p>
                                        </div>
                                        <div class="btn_blk mt-5 pt 3">
                                            <button type="button" class="site_btn simple stroke flex-grow-1">Use Unverified Address</button>
                                            <button type="button" class="site_btn flex-grow-1">Use Verified Address</button>
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