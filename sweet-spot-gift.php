<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sweet Spot Gift — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="spot_gift">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="gift_circle">
            <div class="contain-fluid text-center">
                <div class="content">
                    <h2>Give the Sweetest Gift</h2>
                    <p>You choose the size, they choose their adventure</p>
                </div>
                <div class="row fs_6">
                    <div class="col-lg-4">
                        <div class="inner">
                            <span class="num">1</span>
                            <div class="ico"><img src="<?= $base_url ?>assets/images/spot_gift_01.svg" alt=""></div>
                            <div class="txt">
                                <h4 class="font_1 pb-3">Select Size</h4>
                                <p>Select the size and budget you want to gift to your friends, family or co-workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <span class="num">2</span>
                            <div class="ico"><img src="<?= $base_url ?>assets/images/spot_gift_02.svg" alt=""></div>
                            <div class="txt">
                                <h4 class="font_1 pb-3">Gift Sent by Email</h4>
                                <p>Your recipient will get an email, notifying them of their gift on the date that you choose. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <span class="num">3</span>
                            <div class="ico"><img src="<?= $base_url ?>assets/images/spot_gift_03.svg" alt=""></div>
                            <div class="txt">
                                <h4 class="font_1 pb-3">They Travel to Their Sweet Spot</h4>
                                <p>You won’t need to worry about choosing the wrong gift. Your recipient gets to choose the box that best suits them.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-3 fs_6 fw_700">
                    <a href="<?= $base_url ?>collections.php" class="text-decoration-underline">Or choose from a list of curated collections</a>
                </div>
            </div>
            <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1920 43.2874V188.301H0V28.3789C47.77 26.8683 23.5499 25.7354 71.3199 24.2248C83.6999 23.8341 96.51 23.4367 109.52 23.5418C125.96 23.6732 140.3 24.5762 154.91 25.2954C185.05 26.7731 197.51 28.6678 231.53 28.5792C246.75 28.5463 263.59 28.3329 273.34 27.2033C292.898 24.8861 311.163 21.5279 327.4 17.2631C330.29 16.6753 334.89 15.017 346.54 13.802C355.65 12.8497 368.99 13.3423 379.79 13.7298C418.79 15.1385 445.33 18.8164 485.36 19.9394C535.25 21.3416 587.56 18.2581 620.62 14.4883C653.68 10.7185 676.12 6.14081 713.84 2.77818C724.439 1.8108 735.257 1.1234 746.19 0.72253C769.69 -0.114844 796.47 0.394153 819.32 1.3793C891.72 4.49564 930.91 11.7102 977.05 17.7984C1023.19 23.8866 1097.76 29.6924 1174.55 27.6925C1233.21 26.1754 1271.44 20.547 1329.76 18.9182C1398.5 17.0037 1468.95 21.2169 1521.44 25.7978C1551.57 28.4248 1585.76 31.4624 1626.75 31.1012C1670.59 30.7137 1698.59 26.6417 1717.8 22.9343C1737.01 19.2269 1759.06 15.0203 1801.25 13.8414C1843.64 12.6592 1890 15.306 1911.11 18.9445C1911.11 18.9445 1919.76 20.1365 1920 20.524V43.2874Z" fill="#DB8080" />
            </svg>
        </section>
        <!-- gift_circle -->


        <section id="gift_block" class="pt-0">
            <form action="" method="POST">
                <div class="wrapper">
                    <div class="contain-fluid z_up text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="content fs_6">
                                    <h2>Sweet Spot™</h2>
                                    <p>Certificates are emailed to your recipient—no need to enter a mailing address!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row flex_row justify-content-center">
                            <div class="col-xl-3 col-md-6">
                                <div class="spot_gift_blk">
                                    <input type="radio" name="spot_gift_btn" id="spot_gift_btn1">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="txt">
                                            <h5 class="font_1">Small</h5>
                                            <p>Recipient picks up to <strong class="color">4</strong> favorite items</p>
                                            <div class="price color fs_6 fw_700">$25.00</div>
                                        </div>
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/download (30) 7.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="spot_gift_blk">
                                    <input type="radio" name="spot_gift_btn" id="spot_gift_btn2">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="txt">
                                            <h5 class="font_1">Medium</h5>
                                            <p>Recipient picks up to <strong class="color">6</strong> favorite items</p>
                                            <div class="price color fs_6 fw_700">$30.00</div>
                                        </div>
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/download (30) 7.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="spot_gift_blk">
                                    <input type="radio" name="spot_gift_btn" id="spot_gift_btn3">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="txt">
                                            <h5 class="font_1">Large</h5>
                                            <p>Recipient picks up to <strong class="color">8</strong> favorite items</p>
                                            <div class="price color fs_6 fw_700">$40.00</div>
                                        </div>
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/download (30) 7.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="spot_gift_blk custom">
                                    <input type="radio" name="spot_gift_btn" id="spot_gift_btn4">
                                    <div class="checkbox"></div>
                                    <div class="inner">
                                        <div class="txt">
                                            <h5 class="font_1">Custom Amount</h5>
                                            <p>Recipient picks up to <strong class="color">X</strong> favorite items</p>
                                        </div>
                                        <div class="form_blk mt-5">
                                            <h6 class="font_1 fw_600 text-start">or set your own budget:</h6>
                                            <input type="text" name="" id="" class="input" placeholder="$ 45 minimum">
                                        </div>
                                        <div class="price color fs_4 fw_700">$0.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#gift_form_wrapper" class="btm_btn run_btn"><img src="<?= $base_url ?>assets/images/Arrow-Gif.gif" alt=""></a>
                </div>
                <div class="form_wrapper" id="gift_form_wrapper">
                    <div class="contain-fluid z_up">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="font_1 mb-5 pb-3">Your Information</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: John">
                                            <label>First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: 92300 0000 000">
                                            <label>Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-md-none"></div>
                            <div class="col-md-6">
                                <h3 class="font_1 mb-5 pb-3">Recipient’s Information</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: John">
                                            <label>First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <input type="text" name="" id="" class="input" placeholder="eg: +1-xxx-xxx-xxxx">
                                            <label>Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_blk form-floating">
                                            <img src="<?= $base_url ?>assets/images/vector-calendar.svg" alt="" class="tip_icon">
                                            <input type="text" name="" id="" class="input datepicker" placeholder="eg: MM-DD-YYYY">
                                            <label>Select Delivery Date</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk mt-5 pt-3 justify-content-center">
                            <!-- <button type="submit" class="site_btn px">Add to Cart</button> -->
                            <button type="button" class="site_btn px pop_btn mobile_100" data-popup="success">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </form>
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
        <!-- gift_block -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>