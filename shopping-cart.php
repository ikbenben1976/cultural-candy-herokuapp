<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping cart — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="cart">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="cart" class="sec_pad_top">
            <div class="contain-fluid">
                <form action="<?= $base_url ?>cart.php" method="POST">
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
                            <div class="cart_side_blk top">
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
                                <div class="btn_blk">
                                    <button type="submit" class="site_btn w-100">Checkout</button>
                                </div>
                                <div class="express text-center">Express Checkout</div>
                                <p class="text-center">By placing an order, you agree to Cultural Candy <a href="<?= $base_url ?>terms-conditions.php">terms</a> and <a href="<?= $base_url ?>privacy-policy.php">privacy policy</a></p>
                                <div class="btn_blk">
                                    <button type="submit" class="site_btn simple w-100 paypal_btn"><img src="<?= $base_url ?>assets/images/paypal_logo.png" alt=""> Checkout</button>
                                    <div class="g_pay_visa w-100">
                                        <button class="g_pay_btn"><img src="<?= $base_url ?>assets/images/g_pay_logo.png" alt=""></button>
                                        <div class="line"></div>
                                        <button class="visa_btn"><img src="<?= $base_url ?>assets/images/visa_logo.png" alt=""></button>
                                    </div>
                                    <button class="site_btn w-100 fb_pay_btn font_1">Facebook Pay</button>
                                    <button class="site_btn w-100 apple_pay_btn font_1">Pay with <img src="<?= $base_url ?>assets/images/apple_pay_logo.png" alt=""></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="top_heading top_head">
                                <div class="txt">
                                    <h3>Cart</h3>
                                    <h6 class="mb-0 opacity-50">$47.97 subtotal • 18 items</h6>
                                </div>
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>categories-list.php" class="site_btn gray mobile_100">Continue Shopping</a>
                                </div>
                            </div>
                            <div class="cart_table">
                                <div class="top_blk">
                                    <h6 class="font_1 mb-0 me-sm-5">Shipment 1 of 1:</h6>
                                    <a href="javascript:void(0)" class="info_blk color text-decoration-underline">
                                        <span>Send to Another Recipient</span>
                                        <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="" class="ms-3">
                                    </a>
                                    <div class="btn_blk ms-auto">
                                        <button type="button" class="link_btn pop_btn" data-popup="remove">Remove All Products</button>
                                    </div>
                                </div>
                                <table class="cart_table_in w-100">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400">Korean Collection</h6>
                                                        <div class="btn_blk">
                                                            <div class="qty_btn_wrap">
                                                                <div class="qty_btn">
                                                                    <a class="minus"></a>
                                                                    <input type="text" name="qty" value="0" class="qty">
                                                                    <a class="plus"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="sm site_btn simple stroke save_later_btn">Save for later</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fs_6">Standard shipping</p>
                                                <p><span class="color">Get it by Thu, Nov 18</span> to 80224</p>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <span class="d-block">each $6.49</span>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400">Korean Collection</h6>
                                                        <div class="btn_blk">
                                                            <div class="qty_btn_wrap">
                                                                <div class="qty_btn">
                                                                    <a class="minus"></a>
                                                                    <input type="text" name="qty" value="0" class="qty">
                                                                    <a class="plus"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="sm site_btn simple stroke save_later_btn">Save for later</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fs_6">Standard shipping</p>
                                                <p><span class="color">Get it by Thu, Nov 18</span> to 80224</p>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <span class="d-block">each $6.49</span>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400">Korean Collection</h6>
                                                        <div class="btn_blk">
                                                            <div class="qty_btn_wrap">
                                                                <div class="qty_btn">
                                                                    <a class="minus"></a>
                                                                    <input type="text" name="qty" value="0" class="qty">
                                                                    <a class="plus"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="sm site_btn simple stroke save_later_btn">Save for later</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fs_6">Standard shipping</p>
                                                <p><span class="color">Get it by Thu, Nov 18</span> to 80224</p>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <span class="d-block">each $6.49</span>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400">Korean Collection</h6>
                                                        <div class="btn_blk">
                                                            <div class="qty_btn_wrap">
                                                                <div class="qty_btn">
                                                                    <a class="minus"></a>
                                                                    <input type="text" name="qty" value="0" class="qty">
                                                                    <a class="plus"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="sm site_btn simple stroke save_later_btn">Save for later</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fs_6">Standard shipping</p>
                                                <p><span class="color">Get it by Thu, Nov 18</span> to 80224</p>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <span class="d-block">each $6.49</span>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400">Korean Collection</h6>
                                                        <div class="btn_blk">
                                                            <div class="qty_btn_wrap">
                                                                <div class="qty_btn">
                                                                    <a class="minus"></a>
                                                                    <input type="text" name="qty" value="0" class="qty">
                                                                    <a class="plus"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="sm site_btn simple stroke save_later_btn">Save for later</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fs_6">Standard shipping</p>
                                                <p><span class="color">Get it by Thu, Nov 18</span> to 80224</p>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <span class="d-block">each $6.49</span>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn_blk mt-5 pt-3 d-xl-none hide_ipad">
                                <button type="submit" class="site_btn w-100">Checkout</button>
                            </div>
                            <p class="font_2 text-center mt-5 mb-4">Shop safely at Cultural Candy Cart # 1076812601745</p>
                            <div class="save_later_blk">
                                <div class="top fs_5 text-center">Saved for later (2)</div>
                                <div class="cart_table">
                                    <table class="cart_table_in w-100">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="prod_blk">
                                                        <div class="ico">
                                                            <a href="<?= $base_url ?>product-detail.php">
                                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h6 class="font_1 fw_400"><a href="<?= $base_url ?>product-detail.php">Korean Collection</a></h6>
                                                            <div class="rateYo"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="price">
                                                        <strong class="fs_6">$ 16.99</strong>
                                                        <div class="btn_blk justify-content-md-center">
                                                            <button type="button" class="site_btn md">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td width="10">
                                                    <button type="button" class="x_btn"></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="prod_blk">
                                                        <div class="ico">
                                                            <a href="<?= $base_url ?>product-detail.php">
                                                                <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h6 class="font_1 fw_400"><a href="<?= $base_url ?>product-detail.php">Korean Collection</a></h6>
                                                            <div class="rateYo"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="price">
                                                        <strong class="fs_6">$ 16.99</strong>
                                                        <div class="btn_blk justify-content-md-center">
                                                            <button type="button" class="site_btn md">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td width="10">
                                                    <button type="button" class="x_btn"></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                            <div class="cart_side_blk top">
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
                                <div class="btn_blk">
                                    <button type="submit" class="site_btn w-100">Checkout</button>
                                </div>
                                <div class="express text-center">Express Checkout</div>
                                <p class="text-center">By placing an order, you agree to Cultural Candy <a href="<?= $base_url ?>terms-conditions.php">terms</a> and <a href="<?= $base_url ?>privacy-policy.php">privacy policy</a></p>
                                <div class="btn_blk">
                                    <button type="submit" class="site_btn simple w-100 paypal_btn"><img src="<?= $base_url ?>assets/images/paypal_logo.png" alt=""> Checkout</button>
                                    <div class="g_pay_visa w-100">
                                        <button class="g_pay_btn"><img src="<?= $base_url ?>assets/images/g_pay_logo.png" alt=""></button>
                                        <div class="line"></div>
                                        <button class="visa_btn"><img src="<?= $base_url ?>assets/images/visa_logo.png" alt=""></button>
                                    </div>
                                    <button class="site_btn w-100 fb_pay_btn font_1">Facebook Pay</button>
                                    <button class="site_btn w-100 apple_pay_btn font_1">Pay with <img src="<?= $base_url ?>assets/images/apple_pay_logo.png" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup" data-popup="remove">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-8">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Remove All Products</h3>
                                        <p>Are you sure you want to remove all Products that are in your cart?</p>
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
        <!-- cart -->


        <section id="smiler_products" class="position-relative overflow-hidden pt-4">
            <div class="contain-fluid">
                <div class="content text-center mb-5 pb-3">
                    <h2 class="mb-0">Explore Our Products</h2>
                </div>
                <div id="slick-explore" class="slick-carousel slick-slider">
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_blk">
                            <div class="top">
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                </div>
                                <div class="add_btn_wrap">
                                    <button type="button" class="add_cart">Add to cart</button>
                                    <button type="button" class="like"><span>541</span></button>
                                    <div class="flag">
                                        <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
                                    <div class="rating">
                                        <span>(54)</span>
                                        <div class="rateYo"></div>
                                    </div>
                                </div>
                                <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                <div class="qty">.95 oz bag</div>
                                <div class="price_blk">
                                    <div class="price">$13.33 <del> $91.60</del></div>
                                    <strong>Save $11.70</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- smiler_products -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>