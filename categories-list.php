<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="categories">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="all_categories" class="sec_pad_top">
            <div class="contain-fluid">
                <!-- <ul class="bread_crumb">
                    <li><a href="?">. . .</a></li>
                    <li><a href="?">Chocolate</a></li>
                    <li><a href="?">Sub-category name</a></li>
                </ul> -->
                <div class="outer">
                    <div id="filter">
                        <div class="scroller">
                            <form action="" method="POST">
                                <!-- <button type="button" class="x_btn"></button> -->
                                <div class="top_head">
                                    <h5 class="font_1 fw_600 mb-0">Filter By</h5>
                                    <button type="button" id="filter_btn"><u>Hide Filter</u> <img src="<?= $base_url ?>assets/images/icon-filter2.svg" alt=""></button>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Category</h6>
                                    <div class="sub">
                                        <ul class="ctg_list">
                                            <li>
                                                <label class="drop"><input type="checkbox" id="" name="">Caramel, Fudge & Toffee </label>
                                                <div class="sub">
                                                    <ul class="ctg_list">
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Caramel (5)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Fudge (10)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Toffee (15)</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <label class="drop"><input type="checkbox" id="" name="">Chocolate </label>
                                                <div class="sub">
                                                    <ul class="ctg_list">
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Caramel (5)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Fudge (10)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Toffee (15)</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <label class="drop"><input type="checkbox" id="" name="">Licorice</label>
                                                <div class="sub">
                                                    <ul class="ctg_list">
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Caramel (5)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Fudge (10)</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" id="" name="">Toffee (15)</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Sales and Offers</h6>
                                    <div class="sub">
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Occasion</h6>
                                    <div class="sub">
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">French-American Heritage Month</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Independence Day</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">International Day of Friendship</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">World Humanitarian Day</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Hispanic Heritage Month</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Mexican Independence Day</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">All Occasions</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Price</h6>
                                    <div class="sub">
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Country</h6>
                                    <div class="sub">
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="input" placeholder="Search here">
                                        </div>
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Argentina</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Brazil</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Colombia</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Guyana</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Guyana</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Argentina</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Brazil</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Colombia</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Guyana</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Guyana</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Argentina</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Brazil</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Collection</h6>
                                    <div class="sub">
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="input" placeholder="Search here">
                                        </div>
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Around the World</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Kosher Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Keto-Friendly Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Vegan Gummies of The World</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Ukraine</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Crowd Pleasers</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Candy to Share</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Argentinian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Belgian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Brazilian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">British Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">French Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">German Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Italian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Ukraine</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Crowd Pleasers</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Candy to Share</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Argentinian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Belgian Candy</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Brazilian Candy</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Specialty Diet</h6>
                                    <div class="sub">
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
                                <div class="in_blk">
                                    <h6 class="drop">Flavor</h6>
                                    <div class="sub">
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="input" placeholder="Search here">
                                        </div>
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Maker</h6>
                                    <div class="sub">
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="input" placeholder="Search here">
                                        </div>
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk">
                                    <h6 class="drop">Customer Rating</h6>
                                    <div class="sub">
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="in_blk border-0">
                                    <h6 class="drop">Tag</h6>
                                    <div class="sub">
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="input" placeholder="Search here">
                                        </div>
                                        <ul class="ctg_list">
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 01</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 02</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 03</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 04</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 05</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 06</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 07</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 08</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 09</label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" id="" name="">Option 10</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn_blk justify-content-center">
                                    <button type="submit" class="site_btn longest mobile_100">Apply Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="r_side">
                        <div class="sort_top_blk">
                            <button type="button" id="filter_btn"><u>Show Filter</u> <img src="<?= $base_url ?>assets/images/icon-filter2.svg" alt=""></button>
                            <div class="tags_blk_slider">
                                <div class="inner_wrap d-flex align-items-center">
                                    <div class="inner fw_500">
                                        <strong class="fw_600">Type:&nbsp;</strong>
                                        Caramel, Fudge, Toffee, Caramel, Toffee
                                        <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                    </div>
                                    <div class="inner fw_500">
                                        <strong class="fw_600">Type:&nbsp;</strong>
                                        Caramel, Fudge, Toffee, Caramel, Toffee
                                        <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                    </div>
                                    <div class="inner fw_500">
                                        <strong class="fw_600">Type:&nbsp;</strong>
                                        Caramel, Fudge, Toffee, Caramel, Toffee
                                        <button type="button" class="cross_btn"><img src="<?= $base_url ?>assets/images/icon-cross2.svg" alt=""></button>
                                    </div>
                                </div>
                                <button type="button" class="clear_btn fw_500"><u>Clear Filter</u></button>
                            </div>
                            <div class="sort_blk">
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">
                                        <strong class="fs_6 fw_600">Sort By:</strong>
                                        <span>Popular</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end w-100">
                                        <li><button type="button">Popular</button></li>
                                        <li><button type="button">Popular 01</button></li>
                                        <li><button type="button">Popular 02</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ctg_row row">
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                        </div>
                        <div class="btn_blk justify-content-center mt-5 pt-3">
                            <a href="?" class="site_btn px simple stroke">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all_categories -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>