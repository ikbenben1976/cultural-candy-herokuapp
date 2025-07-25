<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="quiz">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="plane_bar" style="background-image: url('<?= $base_url ?>assets/images/plane_cloud_background_1.svg');">
            <div class="contain-fluid z_up">
                <div class="row">
                    <div class="col-lg-9">
                        <div id="plane">
                            <div class="tail"><img src="<?= $base_url ?>assets/images/plane_tail.svg" alt=""></div>
                            <div id="slick-plane" class="slick-carousel slick slider">
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="<?= $base_url ?>assets/images/empty_wrap.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="head"><img src="<?= $base_url ?>assets/images/plane_front.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price_blk">
                            <div class="d-flex">
                                <div class="txt flex-grow-1">
                                    <h5 class="font_1 color mb-1">Box</h5>
                                    <span>Subtotal:</span>
                                </div>
                                <strong class="price fs_3 color">$150.00</strong>
                            </div>
                            <div class="btn_blk justify-content-center mt-3">
                                <a href="<?= $base_url ?>shopping-cart.php" class="site_btn px">View All Items</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plane_bar -->


        <section id="quiz_result">
            <div class="contain-fluid">
                <h2 class="text-center mb-5 pb-3">Your Sweet Spot — Personalized Results</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                    <div class="num">1</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                    <div class="num">2</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                    </a>
                                    <div class="num">3</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                    </a>
                                    <div class="num">4</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                    <div class="num">5</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                    <div class="num">6</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                    </a>
                                    <div class="num">7</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                    </a>
                                    <div class="num">8</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                    </a>
                                    <div class="num">9</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                    </a>
                                    <div class="num">10</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/03.png" alt="">
                                    </a>
                                    <div class="num">11</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="product_blk">
                            <div class="top">
                                <div class="target_wrap">
                                    <div class="rateYo" data-rateyo-rated-fill="#FFCB45" data-rateyo-star-width="2rem"></div>
                                    <div class="target"><img src="<?= $base_url ?>assets/images/target.svg" alt=""> 95%</div>
                                </div>
                                <div class="fig">
                                    <a href="<?= $base_url ?>product-detail.php">
                                        <img src="<?= $base_url ?>assets/images/products/04.png" alt="">
                                    </a>
                                    <div class="num">12</div>
                                    <div class="add_btn_wrap no_hover">
                                        <div class="flag">
                                            <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="add"></button>
                            </div>
                            <div class="btm">
                                <div class="rate_blk">
                                    <div class="brand"><a href="<?= $base_url ?>product-detail.php">Garoto</a></div>
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
                <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                    <!-- <button type="button" class="site_btn back prev_btn">Back</button> -->
                    <a href="<?= $base_url ?>quiz.php" class="site_btn back prev_btn">Back</a>
                    <a href="?" class="site_btn px simple stroke">Load More</a>
                </div>
                <div class="selection_blk">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="mb-0">Your Selections</h5>
                        </div>
                        <div class="col-lg-8">
                            <p>Want to receive your result to your inbox? <strong class="color">Enter email address</strong></p>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><strong>Location: </strong>Asia, Europe, South America</p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Flavor: </strong>Sweet (1), Savory (2), Salty (3), Sour (4), Bitter (5)</p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Texture: </strong>Chewy, Crunchy, Gummy, Hard</p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Type: </strong>All (except Chocolate)</p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Aroma: </strong>Roasted, Buttery, Herbal, buttery, </p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Specialty Diet: </strong>Vegan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quiz_result -->


        <section id="smiler_products" class="position-relative overflow-hidden">
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
                $(document).on("click", "#quiz .start_quiz_btn", function() {
                    $("#quiz > form").fadeIn();
                    $("#quiz .quiz_banner").fadeOut();
                    $(window).scrollTop(0);
                });
                $(document).on("click", "#quiz .back_quiz_btn", function() {
                    $("#quiz .quiz_banner").fadeIn();
                    $("#quiz > form").fadeOut();
                    $(window).scrollTop(0);
                });
                $(".top_bar > li:first").addClass("current");
                li = $(".top_bar > li");
                $(document).on("click", ".top_bar > li.done", function() {
                    name = $(this).attr("data-name");
                    $("#quiz > form > fieldset").hide();
                    $("#quiz > form > fieldset[data-name=" + name + "]").show();
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