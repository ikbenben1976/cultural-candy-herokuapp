<!DOCTYPE html>
<html lang="en">

<head>
    <title>Review Order — Cultural Candy</title>
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
                            <a href="<?= $base_url ?>payment.php">
                                <strong class="num"><img src="<?= $base_url ?>assets/images/check.svg" alt=""></strong>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $base_url ?>review-order.php" class="current">
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
                <form action="<?= $base_url ?>order-confirmed.php" method="POST">
                    <button type="button" id="summary_btn" class="site_btn simple stroke w-100" data-view="Show order summary" data-hide="Hide order summary">
                        <img src="<?= $base_url ?>assets/images/icon-basket.svg" alt="">
                    </button>
                    <div class="top_heading top_head">
                        <div class="txt">
                            <h3>Review Your Order</h3>
                            <h6 class="mb-0 opacity-50">Please review your order to ensure that everything is correct</h6>
                        </div>
                    </div>
                    <div class="row shopping_row">
                        <div class="col-xl-3" id="summary_blk">
                            <div class="top_heading side_head">
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>shopping-cart.php" class="link_btn" id="discount_btn">Return to Cart</a>
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
                                <div class="btn_blk mb-4">
                                    <button type="submit" class="site_btn w-100">Place Order</button>
                                </div>
                                <p class="text-center">By placing an order, you agree to Cultural Candy <a href="<?= $base_url ?>terms-conditions.php">terms</a> and <a href="<?= $base_url ?>privacy-policy.php">privacy policy</a></p>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="cart_table">
                                <div class="top_blk">
                                    <h6 class="font_1 mb-0 me-sm-5">Shipment 1 of 2:</h6>
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
                                <h6 class="font_1">Sending To:</h6>
                                <div id="old_address_blk">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form_blk dropdown">
                                                <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button>
                                                <ul class="dropdown-menu dropdown-menu-end w-100">
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form_blk btn_blk justify-content-end">
                                                <button type="button" class="link_btn color" id="add_new_address_btn">Add New Address</button>
                                                <button type="button" class="link_btn color">Edit Address</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="new_address_blk">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: John">
                                                <label class="require">Recipient’s First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                                <label class="require">Recipient’s Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 123 Main Street, California">
                                                <label class="require">Delivery Address</label>
                                            </div>
                                            <p class="opacity-50 small"><strong>Delivery Notes:</strong> Packages sent to PO Boxes and APO Installations can only be sent with USPS and may incur an additional charge</p>
                                            <button type="button" class="link_btn color">Add Address Line 2</button>
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
                                        <div class="col-sm-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                                <label>Recipient Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk mt-3 pt-3">
                                        <button type="button" class="site_btn w-100">Save Address to Continue</button>
                                    </div>
                                </div>
                                <div class="info_table">
                                    <hr>
                                    <div class="tr">
                                        <div class="title fs_6 fw_600 text-nowrap">Delivery Date:</div>
                                        <div class="data">
                                            <span class="color fw_600">Saturday, March 6th 2022</span>
                                        </div>
                                        <div class="btns">
                                            <button type="button" class="link_btn color">Edit</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="tr">
                                        <div class="title fs_6 fw_600 text-nowrap">Gifting Options:</div>
                                        <div class="data">
                                            <div class="no_gift" id="no_gift_wrap">
                                                <span class="color fw_600">Business Gift</span>
                                                <span class="color fw_600">Your message...</span>
                                                <span class="color fw_600">1 Gift Box Selected</span>
                                            </div>
                                            <div id="gift_box_wrap" class="w-100">
                                                <h6 class="font_1 color text-center mb-5">Choose an eCard</h6>
                                                <div class="slick-gifts slick-carousel slick-slider text-center">
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_01">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_01.png" alt=""></div>
                                                                <span class="fw_600">Birthday Gift</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_02">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_02.png" alt=""></div>
                                                                <span class="fw_600">Anniversary</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_03">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_03.png" alt=""></div>
                                                                <span class="fw_600">Congrats</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_04">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_04.png" alt=""></div>
                                                                <span class="fw_600">Support</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_05">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_05.png" alt=""></div>
                                                                <span class="fw_600">Friendship</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_06">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_06.png" alt=""></div>
                                                                <span class="fw_600">International Holidays</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_07">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_03.png" alt=""></div>
                                                                <span class="fw_600">Congrats</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_08">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_04.png" alt=""></div>
                                                                <span class="fw_600">Support</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-5">
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_01">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_02">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_03">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_04">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_05">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_06">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_07">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_08">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_09">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="font_1 mb-4">Selected eCard:</h6>
                                                <div class="row mb-5 align-items-center">
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="" id="" checked>
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <h5 class="font_1">When should we send this eCard?</h5>
                                                        <div class="form_blk form-floating">
                                                            <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                            <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                            <label>Select Delivery Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-5">
                                                    <div class="col-sm-12">
                                                        <h5 class="font_1">Enter gift giver(s) name(s) and recipient information below</h5>
                                                        <h6 class="font_1">From</h6>
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: Lorem Ipsum">
                                                            <label>Gifter's name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h6 class="font_1">To</h6>
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: John Wick">
                                                            <label>Recipient’s Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                                            <label>Recipient’s Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h6 class="font_1">eCard Message</h6>
                                                        <div class="form_blk form-floating">
                                                            <textarea name="" id="" class="input" placeholder="Type something here..."></textarea>
                                                            <label>Write your message here</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="font_1 color text-center mb-5">Gift Message <small class="fw_400 text-black">(Optional)</small></h6>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h5 class="font_1">Gift Message Sent with Package</h5>
                                                        <textarea name="" id="" class="input" placeholder="Message..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-5 pt-3"></div>
                                                <h6 class="font_1 color text-center mb-5">Gift Box <small class="fw_400 text-black">(Optional)</small></h6>
                                                <div class="slick-gifts_paid slick-carousel slick-slider text-center">
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btns">
                                            <button type="button" class="link_btn color" id="add_gift_box_btn">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_table">
                                <div class="top_blk">
                                    <h6 class="font_1 mb-0 me-sm-5">Shipment 2 of 2:</h6>
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
                                <h6 class="font_1">Sending To:</h6>
                                <div id="old_address_blk">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form_blk dropdown">
                                                <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button>
                                                <ul class="dropdown-menu dropdown-menu-end w-100">
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                    <li><button type="button">Hyacinth Craft, 38 Hague Extension, Scott MS US, 38772, (303) 872-0228</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form_blk btn_blk justify-content-end">
                                                <button type="button" class="link_btn color" id="add_new_address_btn">Add New Address</button>
                                                <button type="button" class="link_btn color">Edit Address</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="new_address_blk">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: John">
                                                <label class="require">Recipient’s First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                                <label class="require">Recipient’s Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 123 Main Street, California">
                                                <label class="require">Delivery Address</label>
                                            </div>
                                            <p class="opacity-50 small"><strong>Delivery Notes:</strong> Packages sent to PO Boxes and APO Installations can only be sent with USPS and may incur an additional charge</p>
                                            <button type="button" class="link_btn color">Add Address Line 2</button>
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
                                        <div class="col-sm-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                                <label>Recipient Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk mt-3 pt-3">
                                        <button type="button" class="site_btn w-100">Save Address to Continue</button>
                                    </div>
                                </div>
                                <div class="info_table">
                                    <hr>
                                    <div class="tr">
                                        <div class="title fs_6 fw_600 text-nowrap">Delivery Date:</div>
                                        <div class="data">
                                            <span class="color fw_600">Saturday, March 6th 2022</span>
                                        </div>
                                        <div class="btns">
                                            <button type="button" class="link_btn color">Edit</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="tr">
                                        <div class="title fs_6 fw_600 text-nowrap">Gifting Options:</div>
                                        <div class="data">
                                            <div class="no_gift" id="no_gift_wrap">
                                                <span class="color fw_600">Business Gift</span>
                                                <span class="color fw_600">Your message...</span>
                                                <span class="color fw_600">1 Gift Box Selected</span>
                                            </div>
                                            <div id="gift_box_wrap" class="w-100">
                                                <h6 class="font_1 color text-center mb-5">Choose an eCard</h6>
                                                <div class="slick-gifts slick-carousel slick-slider text-center">
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_01">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_01.png" alt=""></div>
                                                                <span class="fw_600">Birthday Gift</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_02">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_02.png" alt=""></div>
                                                                <span class="fw_600">Anniversary</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_03">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_03.png" alt=""></div>
                                                                <span class="fw_600">Congrats</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_04">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_04.png" alt=""></div>
                                                                <span class="fw_600">Support</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_05">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_05.png" alt=""></div>
                                                                <span class="fw_600">Friendship</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_06">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_06.png" alt=""></div>
                                                                <span class="fw_600">International Holidays</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_07">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_03.png" alt=""></div>
                                                                <span class="fw_600">Congrats</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="sm_gift_blk">
                                                            <input type="radio" name="gift_card" id="gift_card_08">
                                                            <div class="inner">
                                                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/gift_04.png" alt=""></div>
                                                                <span class="fw_600">Support</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-5">
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_01">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_02">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_03">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_04">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_05">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_06">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_07">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_08">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="gift_card_box" id="gift_card_box_09">
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="font_1 mb-4">Selected eCard:</h6>
                                                <div class="row mb-5 align-items-center">
                                                    <div class="col-6 col-md-4">
                                                        <div class="gift_card_box">
                                                            <input type="radio" name="" id="" checked>
                                                            <div class="inner">
                                                                <img src="<?= $base_url ?>assets/images/gift_card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <h5 class="font_1">When should we send this eCard?</h5>
                                                        <div class="form_blk form-floating">
                                                            <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                            <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                            <label>Select Delivery Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-5">
                                                    <div class="col-sm-12">
                                                        <h5 class="font_1">Enter gift giver(s) name(s) and recipient information below</h5>
                                                        <h6 class="font_1">From</h6>
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: Lorem Ipsum">
                                                            <label>Gifter's name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h6 class="font_1">To</h6>
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: John Wick">
                                                            <label>Recipient’s Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form_blk form-floating">
                                                            <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                                            <label>Recipient’s Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h6 class="font_1">eCard Message</h6>
                                                        <div class="form_blk form-floating">
                                                            <textarea name="" id="" class="input" placeholder="Type something here..."></textarea>
                                                            <label>Write your message here</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="font_1 color text-center mb-5">Gift Message <small class="fw_400 text-black">(Optional)</small></h6>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h5 class="font_1">Gift Message Sent with Package</h5>
                                                        <textarea name="" id="" class="input" placeholder="Message..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-5 pt-3"></div>
                                                <h6 class="font_1 color text-center mb-5">Gift Box <small class="fw_400 text-black">(Optional)</small></h6>
                                                <div class="slick-gifts_paid slick-carousel slick-slider text-center">
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="paid_gift_blk">
                                                            <div class="fig"><img src="<?= $base_url ?>assets/images/gift_package.jpg" alt=""></div>
                                                            <div class="txt">
                                                                <h5 class="font_1 fw_700">$13.33</h5>
                                                                <div class="btn_blk justify-content-center">
                                                                    <button type="button" class="site_btn px">Select</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btns">
                                            <button type="button" class="link_btn color" id="add_gift_box_btn">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment_info_blk">
                                <h6 class="font_1">Payment Method:</h6>
                                <p>Credit or debit card</p>
                                <div class="credit_card_bar mb-4">
                                    <h6 class="font_1 mb-0">Credit Card/Debit Card</h6>
                                    <div class="cards_fig">
                                        <img src="<?= $base_url ?>assets/images/payment_visa.svg" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form_blk dropdown">
                                            <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Ending in 7949- John Doe -09/2024</button>
                                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                                <li><button type="button">Ending in ...8843 Exp ***/***</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_blk mt-4 mb-3">
                                    <button class="link_btn color plus">Add New Credit Card</button>
                                </div>
                                <div class="billing_address mb-4">
                                    <h6 class="font_1">Billing Address:</h6>
                                    <div class="form_blk">
                                        <input type="text" name="" id="" class="input" value="John Doe,8804 G . OHIO DR..,Denver, CO, 894552, US">
                                    </div>
                                </div>
                                <h6 class="font_1">Contact Info:</h6>
                                <p>Order confirmation email will be sent to: <strong>bradleymartin852@gmail.com</strong></p>
                                <p>Phone number for delivery courier: <strong>(235)468-5887</strong></p>
                            </div>
                            <div class="place_btn_blk hide_ipad">
                                <h6 class="font_1">Your Order Total: $89.99</h6>
                                <div class="btn_blk mb-4">
                                    <button type="submit" class="site_btn w-100">Place Order</button>
                                </div>
                                <p class="text-center">By placing an order, you agree to Cultural Candy <a href="terms-conditions.php">terms</a> and <a href="<?= $base_url ?>privacy-policy.php">privacy policy</a></p>
                            </div>
                            <p class="font_2 text-center mt-5">Shop safely at Cultural Candy Cart # 1076812601745</p>
                        </div>
                        <div class="col-xl-3">
                            <div class="top_heading side_head">
                                <div class="btn_blk">
                                    <a href="<?= $base_url ?>shopping-cart.php" class="link_btn" id="discount_btn">Return to Cart</a>
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
                                <div class="btn_blk mb-4">
                                    <button type="submit" class="site_btn w-100">Place Order</button>
                                </div>
                                <p class="text-center">By placing an order, you agree to Cultural Candy <a href="<?= $base_url ?>terms-conditions.php">terms</a> and <a href="<?= $base_url ?>privacy-policy.php">privacy policy</a></p>
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


        <script>
            $(window).on("load", function() {
                $(document).on("click", "#add_new_address_btn", function() {
                    $(this).hide();
                    $(this).parents(".cart_table").find("#new_address_blk").slideDown();
                });
                $(document).on("click", "#add_gift_box_btn", function(e) {
                    e.target;
                    e.relatedTarget;
                    $(this).hide();
                    $(this).parents(".cart_table").find("#no_gift_wrap").hide();
                    $(this).parents(".cart_table").find("#gift_box_wrap").slideDown();
                    $(this).parents(".cart_table").find(".slick-gifts").slick("setPosition");
                    $(this).parents(".cart_table").find(".slick-gifts_paid").slick("setPosition");
                });
            });
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>