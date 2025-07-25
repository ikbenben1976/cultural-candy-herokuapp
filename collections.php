<!DOCTYPE html>
<html lang="en">

<head>
    <title>Collections — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="collections">
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


        <section id="cover" style="background-image: url('<?= $base_url ?>assets/images/Group 40136.jpg');">
            <div class="contain-fluid">
                <div class="flex_blk align-items-center justify-content-center">
                    <div class="w-100">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6 col-md-8">
                                <h2 class="text-uppercase pb-3">All Collections</h2>
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Select Collection</button>
                                    <ul class="dropdown-menu dropdown-menu-end w-100">
                                        <li><button type="button">Popular</button></li>
                                        <li><button type="button">Popular 01</button></li>
                                        <li><button type="button">Popular 02</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cover -->


        <section id="collections">
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/pakistan-flag.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">PAKISTANI CANDY</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Pakistani Candy</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Brazil.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Brazil Candy of the world</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Argentina.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Argentina munchies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/England.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">England Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Italy.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Italy Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Mexico.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Mexico Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/The Netherlands.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Netherlands Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Turkey.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Turkey Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner" style="background-image: url('<?= $base_url ?>assets/images/Spain.jpg');">
                <div class="contain-fluid z_up">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="txt">
                            <h2 class="text-uppercase mb-0"><a href="<?= $base_url ?>collections-detail.php">Spain Candies</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="contain-fluid">
                    <div class="top_blk">
                        <div class="txt">
                            <strong class="title"><a href="<?= $base_url ?>collections-detail.php">Collection 1</a></strong>
                            <span>14 Items</span>
                        </div>
                        <div class="btn_blk">
                            <button type="button" class="site_btn">Add 14 Items to Box</button>
                        </div>
                        <div class="tags_blk_slider">
                            <div class="inner_wrap d-flex align-items-center">
                                <div class="inner fw_500">
                                    Gluten-Free
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                                <div class="inner fw_500">
                                    Vegetarian
                                    <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                </div>
                            </div>
                            <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="site_btn light stroke dropdown-toggle select chevron" data-bs-toggle="dropdown" data-bs-auto-close="outside"><img src="<?= $base_url ?>assets/images/icon-filter3.svg" alt=""> Filter</button>
                            <div class="dropdown-menu dropdown-menu-end w-100 filter_list_blk">
                                <strong class="d-block fs_6 mb-4">Better for You</strong>
                                <ul class="ctg_list">
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegetarian</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Vegan</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Gluten-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Halal</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sodium-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Dairy-Free</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Low-Fat</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Kosher</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Sugar-Conscious</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Organic</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Paleo-Friendly</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" id="" name="">Keto-Friendly</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_inner overflow-hidden">
                    <div class="contain-fluid">
                        <div class="slick-categories slick-carousel slick-slider">
                            <div class="item">
                                <div class="product_blk">
                                    <div class="top">
                                        <div class="fig">
                                            <a href="<?= $base_url ?>product-detail.php">
                                                <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                        <div class="add_btn_wrap no_hover">
                                            <button type="button" class="like"><span>541</span></button>
                                            <div class="flag">
                                                <a href="<?= $base_url ?>country-detail.php"><img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <button type="button" class="add"></button>
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
                                    <div class="view">
                                        <a href="<?= $base_url ?>collections-detail.php">View all 34 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- collections -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>