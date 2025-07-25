<!DOCTYPE html>
<html lang="en">

<head>
    <title>Candy Plan — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="plan">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="plan_explore" class="overflow-hidden">
            <div class="contain-fluid">
                <form action="" method="POST">
                    <ul class="top_bar fs_6 font_2 text-center">
                        <li data-name="explorer">
                            <button type="button">Explorer <img src="<?= $base_url ?>assets/images/check_circle.svg" alt=""></button>
                        </li>
                        <li data-name="date">
                            <button type="button">Delivery Date <img src="<?= $base_url ?>assets/images/check_circle.svg" alt=""></button>
                        </li>
                        <li data-name="details">
                            <button type="button">Delivery Details <img src="<?= $base_url ?>assets/images/check_circle.svg" alt=""></button>
                        </li>
                    </ul>
                    <fieldset data-name="explorer">
                        <div class="content text-center mb-5 pb-3">
                            <h2 class="font_1 fw_700 text-uppercase mb-0">EXPLORER</h2>
                            <p class="fs_5 fw_600 mt-4">Select Your 3 Collection Boxes & Choose Dates</p>
                        </div>
                        <div id="slick-plan_explore" class="slick-carousel slick-slider">
                            <div class="item">
                                <div class="candy_box">
                                    <input type="radio" name="candy_box_btn" id="candy_box_btn1">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="top">
                                            <div class="fig">
                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                            </div>
                                            <div class="txt">
                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                            </div>
                                        </div>
                                        <div class="qty_btn_wrap text-end">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="fw_600">Your Collection May Contain </span>
                                                <button type="button" class="view_btn ms-4 pop_btn" data-popup="collection">View All</button>
                                            </div>
                                            <ul class="item_row">
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="candy_box">
                                    <input type="radio" name="candy_box_btn" id="candy_box_btn2">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="top">
                                            <div class="fig">
                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                            </div>
                                            <div class="txt">
                                                <h5 class="font_1 me-5 pe-3">Chinese Box</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                            </div>
                                        </div>
                                        <div class="qty_btn_wrap text-end">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="fw_600">Your Collection May Contain </span>
                                                <button type="button" class="view_btn ms-4 pop_btn" data-popup="collection">View All</button>
                                            </div>
                                            <ul class="item_row">
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="candy_box">
                                    <input type="radio" name="candy_box_btn" id="candy_box_btn3">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="top">
                                            <div class="fig">
                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                            </div>
                                            <div class="txt">
                                                <h5 class="font_1 me-5 pe-3">Vegan Gummies Box</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                            </div>
                                        </div>
                                        <div class="qty_btn_wrap text-end">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="fw_600">Your Collection May Contain </span>
                                                <button type="button" class="view_btn ms-4 pop_btn" data-popup="collection">View All</button>
                                            </div>
                                            <ul class="item_row">
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="candy_box">
                                    <input type="radio" name="candy_box_btn" id="candy_box_btn4">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="top">
                                            <div class="fig">
                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                            </div>
                                            <div class="txt">
                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                            </div>
                                        </div>
                                        <div class="qty_btn_wrap text-end">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="fw_600">Your Collection May Contain </span>
                                                <button type="button" class="view_btn ms-4 pop_btn" data-popup="collection">View All</button>
                                            </div>
                                            <ul class="item_row">
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="candy_box">
                                    <input type="radio" name="candy_box_btn" id="candy_box_btn5">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="top">
                                            <div class="fig">
                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                            </div>
                                            <div class="txt">
                                                <h5 class="font_1 me-5 pe-3">Vegan Gummies Box</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                            </div>
                                        </div>
                                        <div class="qty_btn_wrap text-end">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="fw_600">Your Collection May Contain </span>
                                                <button type="button" class="view_btn ms-4 pop_btn" data-popup="collection">View All</button>
                                            </div>
                                            <ul class="item_row">
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <!-- <button type="button" class="site_btn back prev_btn">Back</button> -->
                            <a href="<?= $base_url ?>candy-plan.php" class="site_btn back prev_btn">Back</a>
                            <button type="button" class="site_btn longest next_btn">Continue to Select Dates</button>
                        </div>
                    </fieldset>
                    <fieldset data-name="date">
                        <div class="content text-center mb-5 pb-3">
                            <h2 class="font_1 fw_700 text-uppercase mb-0">Choose Date</h2>
                        </div>
                        <div class="insider">
                            <div class="scroller scrollbar">
                                <div class="candy_box_wrap">
                                    <div class="candy_box_item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="candy_box simple">
                                                    <div class="inner">
                                                        <div class="top">
                                                            <div class="fig">
                                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                            </div>
                                                            <div class="txt">
                                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="font_1">Pick a Delivery Date</h5>
                                                <div class="form_blk">
                                                    <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                    <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="candy_box simple">
                                                    <div class="inner">
                                                        <div class="top">
                                                            <div class="fig">
                                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                            </div>
                                                            <div class="txt">
                                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="font_1">Pick a Delivery Date</h5>
                                                <div class="form_blk">
                                                    <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                    <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="candy_box simple">
                                                    <div class="inner">
                                                        <div class="top">
                                                            <div class="fig">
                                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                            </div>
                                                            <div class="txt">
                                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="font_1">Pick a Delivery Date</h5>
                                                <div class="form_blk">
                                                    <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                    <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="candy_box simple">
                                                    <div class="inner">
                                                        <div class="top">
                                                            <div class="fig">
                                                                <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                            </div>
                                                            <div class="txt">
                                                                <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="font_1">Pick a Delivery Date</h5>
                                                <div class="form_blk">
                                                    <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                                    <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Save and Next</button>
                        </div>
                    </fieldset>
                    <fieldset data-name="details">
                        <div class="content text-center mb-5 pb-3">
                            <h2 class="font_1 fw_700 text-uppercase mb-0">Delivery Details</h2>
                        </div>
                        <div class="insider">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="font_1 mb-4">Delivery Details</h5>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: John">
                                                <label class="require">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                                <label class="require">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: 123 Main Street, California">
                                                <label class="require">Address line 1</label>
                                            </div>
                                            <p class="opacity-50"><strong>Delivery Notes:</strong> Packages sent to PO Boxes and APO Installations can only be sent with USPS and may incur an additional charge</p>
                                            <button class="link_btn color plus">Address Line 2</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: BL0 0WY">
                                                <label class="require">Zip Code</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: California">
                                                <label>City</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: Sheffield">
                                                <label class="require">State</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                        <div class="col-lg-6">
                                            <div class="form_blk form-floating">
                                                <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                                <label>Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="lbl_btn fw_500 h-100 align-items-center">
                                                <input type="checkbox" name="remember" id="remember">
                                                <label for="remember">Set me as preferred shipping address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_blk form-floating">
                                                <textarea name="" id="" class="input" placeholder="Type something here (optional)"></textarea>
                                                <label>Delivery instructions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroller scrollbar absolute">
                                <div class="candy_box_wrap">
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                        <span class="badge">2</span>
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Chinese Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Vegan Gummies Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Brazilian Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Chinese Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candy_box_item">
                                        <div class="candy_box simple">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="fig">
                                                        <img src="<?= $base_url ?>assets/images/yum 2.png" alt="">
                                                    </div>
                                                    <div class="txt">
                                                        <h5 class="font_1 me-5 pe-3">Vegan Gummies Box</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum The selection for those who don't know where to begin, for the crowd, by the crowd </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <!-- <button type="submit" class="site_btn longest">Add to Cart</button> -->
                            <button type="button" class="site_btn longest pop_btn" data-popup="success">Add to Cart</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="popup" data-popup="collection">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Your Collection May Contain</h3>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_01.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_02.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_03.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="collect_blk">
                                                    <div class="fig">
                                                        <a href="<?= $base_url ?>product-detail.php"><img src="<?= $base_url ?>assets/images/box_04.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <div class="title"><a href="<?= $base_url ?>product-detail.php">Lorem ipsum dolor sit amet vitae, similique dicta illo quae harum ullam rem est omnis quos odio.</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="success">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-8 col-md-10">
                                    <div class="_inner text-center">
                                        <div class="check_icon"><img src="<?= $base_url ?>assets/images/check_circle_icon.svg" alt=""></div>
                                        <h2>Successfully Added to Cart</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plan_explore -->


        <script>
            $(window).on("load", function() {
                $(".top_bar > li:first").addClass("current");
                li = $(".top_bar > li");
                $(document).on("click", ".top_bar > li.done", function() {
                    name = $(this).attr("data-name");
                    $("#plan_explore form > fieldset").hide();
                    $("#plan_explore form > fieldset[data-name=" + name + "]").show();
                    $(this).nextAll().removeClass("current").removeClass("done");
                    $(this).removeClass("done");
                    $(this).addClass("current");
                });
                $(document).on("click", ".next_btn", function() {
                    let check = true;
                    if (check) {
                        name = $(this).parents("fieldset").data("name");
                        fieldset = $(this).parents("fieldset");
                        nextStep = fieldset.next("fieldset");
                        fieldset.hide();
                        nextStep.fadeIn();
                        li.prevAll().removeClass("current");
                        $(".top_bar > li[data-name=" + name + "]")
                            .next()
                            .addClass("current");
                        $(".top_bar > li[data-name=" + name + "]").addClass("done");
                        $(window).scrollTop(0);
                    }
                });
                $(document).on("click", ".prev_btn", function() {
                    let check = true;
                    if (check) {
                        name = $(this).parents("fieldset").data("name");
                        fieldset = $(this).parents("fieldset");
                        prevStep = fieldset.prev("fieldset");
                        fieldset.hide();
                        prevStep.fadeIn();
                        li.nextAll().removeClass("current");
                        $(".top_bar > li[data-name=" + name + "]")
                            .prev()
                            .addClass("current")
                            .removeClass("done");
                        $(".top_bar > li[data-name=" + name + "]")
                            .removeClass("current")
                            .removeClass("done");
                        $(window).scrollTop(0);
                    }
                });
            });
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>