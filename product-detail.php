<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Detail — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="detail">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="detail" class="sec_pad_top">
            <div class="contain-fluid">
                <ul class="bread_crumb">
                    <li><a href="?">. . .</a></li>
                    <li><a href="?">Chocolate</a></li>
                    <li><a href="?">Sub-category name</a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="location_blk">
                            <div class="location fs_6 fw_600">
                                <span>Location:</span>
                                <a href="?" class="text-uppercase"><img src="<?= $base_url ?>assets/images/flag.png" alt="">Brazil</a>
                                <a href="?">South America</a>
                            </div>
                            <div class="top_rate font_2 fw_600">Top Rated</div>
                        </div>
                        <div class="detail_slider">
                            <div id="slick-detail" class="slick-carousel slick-slider">
                                <div class="item">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/image_4_255771.jpg" alt=""></div>
                                </div>
                                <div class="item">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg" alt=""></div>
                                </div>
                                <div class="item">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/1612330455_14-p-fon-shokolada-skachat-besplatno-22 1.jpg" alt=""></div>
                                </div>
                                <div class="item">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/agustin-diaz-gargiulo-7F65HDP0-E0-unsplash (2) 1.jpg" alt=""></div>
                                </div>
                                <div class="item">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/Mask group1.jpg" alt=""></div>
                                </div>
                            </div>
                            <button type="button"><img src="<?= $base_url ?>assets/images/icon-search.svg" alt=""></button>
                        </div>
                        <div id="slick-detail-thumb" class="slick-carousel slick-slider">
                            <div class="item">
                                <div class="thumb"><img src="<?= $base_url ?>assets/images/image_4_255771.jpg" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="thumb"><img src="<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="thumb"><img src="<?= $base_url ?>assets/images/1612330455_14-p-fon-shokolada-skachat-besplatno-22 1.jpg" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="thumb"><img src="<?= $base_url ?>assets/images/agustin-diaz-gargiulo-7F65HDP0-E0-unsplash (2) 1.jpg" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="thumb vid_thumb"><img src="<?= $base_url ?>assets/images/Mask group1.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?= $base_url ?>shopping-cart.php" method="POST">
                            <div class="content">
                                <div class="brand fs_5"><a href="<?= $base_url ?>categories-list.php">Garoto</a></div>
                                <div class="title">
                                    <h3 class="font_1 fw_700 mb-0">Garoto Yellow Box Bon bons</h3>
                                    <div class="sku"><strong class="font_2">SKU </strong>K9651679TUT</div>
                                </div>
                                <div class="rate_blk">
                                    <div class="rating d-flex align-items-center">
                                        <div class="rateYo" data-rateyo-rated-fill="#ffcb45" data-rateyo-star-width="2.6rem" data-rateyo-spacing="0.8rem"></div>
                                        <span class="fs_6 fw_600 ms-4">4.5</span>
                                        <div class="sku"><strong class="font_2">SKU </strong>K9651679TUT</div>
                                    </div>
                                    <ul class="fs_6">
                                        <li class="fw_600">25 Reviews</li>
                                        <li><img src="<?= $base_url ?>assets/images/icon-heart-fill.svg" alt="">2296 Loves</li>
                                        <li class="fw_600">5 Questions</li>
                                    </ul>
                                </div>
                                <div class="price_wrap d-flex">
                                    <div class="price font_2 fw_600">$2.95 <del class="font_1 fw_700"> $91.60</del></div>
                                    <div class="spe_attr">
                                        <strong class="fw_600 text-uppercase">SPECIAL ATTRIBUTE</strong>
                                        <div class="inr">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                                <div class="form_blk_wrap d-flex">
                                    <div class="form_blk mb-0 flex-grow-1">
                                        <h6 class="font_1 fw_700">Flavor/Size</h6>
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle select chevron input w-100" data-bs-toggle="dropdown">Select Flavor/Size</button>
                                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                                <li><button type="button">Popular</button></li>
                                                <li><button type="button">Popular 01</button></li>
                                                <li><button type="button">Popular 02</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_blk mb-0">
                                        <h6 class="font_1 fw_700">Quantity</h6>
                                        <div class="qty_btn_wrap">
                                            <div class="qty_btn">
                                                <a class="minus"></a>
                                                <input type="text" name="qty" value="0" class="qty">
                                                <a class="plus"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_blk my-5 pt-5 pb-3">
                                    <button type="submit" class="site_btn auto mobile_100">Add to Cart - $32.45</button>
                                    <a href="<?= $base_url ?>shopping-cart-empty.php" class="site_btn gray auto">Save for Later</a>
                                    <button type="button" class="site_btn simple stroke like like_btn tooltip_btn p-0">
                                        <span class="tooltip" data-like="Add to your favorites" data-liked="Remove it from your favorites"></span>
                                    </button>
                                </div>
                                <div class="social_blk d-md-flex">
                                    <ul class="social">
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_link.svg" alt="">
                                                <span class="tooltip" data-text="Copy Link"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_facebook2.svg" alt="">
                                                <span class="tooltip" data-text="Facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_messanger.svg" alt="">
                                                <span class="tooltip" data-text="Messanger"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_twitter2.svg" alt="">
                                                <span class="tooltip" data-text="Twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_whatsapp.svg" alt="">
                                                <span class="tooltip" data-text="Whatsapp"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="prod_by fs_6"><strong class="font_2">Product best by: </strong>Aug, dd, yyyy</div>
                                </div>
                                <div class="social_blk d-md-flex">
                                    <ul class="social">
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_link.svg" alt="">
                                                <span class="tooltip" data-text="Copy Link"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_facebook2.svg" alt="">
                                                <span class="tooltip" data-text="Facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_messanger.svg" alt="">
                                                <span class="tooltip" data-text="Messanger"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_twitter2.svg" alt="">
                                                <span class="tooltip" data-text="Twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?" class="tooltip_btn">
                                                <img src="<?= $base_url ?>assets/images/social_whatsapp.svg" alt="">
                                                <span class="tooltip" data-text="Whatsapp"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="prod_by fs_6"><strong class="red_text">Out of Stock: </strong><a class="pop_btn blue_text fw_600 text-decoration-underline" data-popup="restock">Add email for restock notice</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="data my-5 py-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="inner fw_600 text-center">
                                <p>The Garoto Bon Bon Box is a favorite amongst Brazilians & is commonly received as a gift on almost any occasion. You'll love the assortment of rich, sweet chocolates and exotic flavors. These delicious assorted Brazilian chocolates have been a Garoto bestseller since 1954.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav tab_list justify-content-center fw_600">
                    <li>
                        <a href="#Description" data-bs-toggle="tab" class="active">Description</a>
                    </li>
                    <li>
                        <a href="#CulturalCandy" data-bs-toggle="tab">Cultural Candy</a>
                    </li>
                    <li>
                        <a href="#Reviews" data-bs-toggle="tab">Reviews</a>
                    </li>
                    <li>
                        <a href="#QstAns" data-bs-toggle="tab">Q&A</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Description">
                    <div class="contain-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="desc_list">
                                    <li>A mix of various sizes, shapes and flavors of delicious chocolate bon bons.</li>
                                    <li>For any time and any place, has a variety of flavors that meet all tastes.</li>
                                    <li>A favorite amongst Brazilians & is commonly received as a gift on almost any occasion.</li>
                                    <li>A chocolate gift to catch the eyes, a surprise and an exchange of affection.</li>
                                    <li>A chocolate gift to catch the eyes, a surprise and an exchange of affection.</li>
                                    <li>Made in <strong>South America, Brazil</strong></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-4"><a class="pop_btn blue_text fw_600 text-decoration-underline" data-popup="nutrition">View Nutritional Information</a></p>
                                <h6 class="font_1 fw_700 mb-4">Better For You:</h6>
                                <option value="option">option</option>
                                <ul class="nutrition_list text-center text-capitalize">
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_01.svg" alt=""></div>
                                        <span class="fw_500">Vegetarian</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_02.svg" alt=""></div>
                                        <span class="fw_500">Vegan</span>
                                    </li>
                                    <li>
                                        <div class="ico none"><img src="<?= $base_url ?>assets/images/diet_03.svg" alt=""></div>
                                        <span class="fw_500">Gluten-free</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_04.svg" alt=""></div>
                                        <span class="fw_500">Halal</span>
                                    </li>
                                    <li>
                                        <div class="ico none"><img src="<?= $base_url ?>assets/images/diet_05.svg" alt=""></div>
                                        <span class="fw_500">Sodium-Free</span>
                                    </li>
                                    <li>
                                        <div class="ico none"><img src="<?= $base_url ?>assets/images/diet_06.svg" alt=""></div>
                                        <span class="fw_500">Dairy-Free</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_07.svg" alt=""></div>
                                        <span class="fw_500">Low-Fat</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_08.svg" alt=""></div>
                                        <span class="fw_500">Kosher</span>
                                    </li>
                                    <li>
                                        <div class="ico none"><img src="<?= $base_url ?>assets/images/diet_09.svg" alt=""></div>
                                        <span class="fw_500">Sugar-Conscious</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_10.svg" alt=""></div>
                                        <span class="fw_500">organic</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_11.svg" alt=""></div>
                                        <span class="fw_500">Paleo-Friendly</span>
                                    </li>
                                    <li>
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/diet_12.svg" alt=""></div>
                                        <span class="fw_500">keto-Friendly</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="CulturalCandy">
                    <div class="contain-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="font_1">Garoto</h3>
                                <p>The country of Brazil is known for many things, including samba, sandy beaches, and of course, beautiful women. True, the country has all of these things in abundance, but beneath the surface there exists many more wonderful attributes. I discovered Brazilian chocolate on my first visit to Brazil, in June of 2007. Newly married, my husband took it upon himself to introduce me to his culture and heritage, and so one of the very first places we went was his neighborhood candy and newspaper shop. I recall the selection being enormous, and I tried many different types of candy, but it was the chocolate that kept me coming back daily for more. </p>
                                <p>&nbsp;</p>
                                <p>My favorites at this time were all made by a company called Garoto, under the parent company Nestle (they own Garoto but operate separately).</p>
                                <p>&nbsp;</p>
                                <p>Garoto, a bean-to bar company that was established in 1929, is today one of the largest chocolate manufacturers in Brazil, along with Barion and Mondélez. These three companies own nearly 75% of the market share in Brazil. The remaining 25% is shared between several </p>
                            </div>
                            <div class="col-lg-6">
                                <div id="slick-image" class="slick-carousel slick-slider">
                                    <div class="item">
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/wallpaperflare 5.jpg" alt=""></div>
                                    </div>
                                    <div class="item">
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/story_video.jpg" alt=""></div>
                                    </div>
                                    <div class="item">
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/1612330455_14-p-fon-shokolada-skachat-besplatno-22 1.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5 mt-5 text-center">
                            <div class="col-sm-12">
                                <div class="row justify-content-center">
                                    <div class="col-xl-5 col-lg-7">
                                        <h2 class="mb-5 pb-3">How to Make Brigadeiro Brazilian Candy Recipe!</h2>
                                    </div>
                                </div>
                                <div class="vid_blk">
                                    <iframe src="https://www.youtube.com/embed/5n0EFtOuH9s?autoplay=0&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="location">
                        <div class="contain-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="region_blk">
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/Brazil_jpg-removebg-preview 1.png" alt=""></div>
                                        <div class="txt">
                                            <h5 class="font_1">Location:</h5>
                                            <a href="#all_categories" class="mini_country_blk run_btn mb-5 pb-3">
                                                BRAZIL
                                                <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                            </a>
                                            <div class="fs_6 fw_600 mb-4 pb-4"><a href="#all_categories" class="run_btn text-decoration-underline">Show More Products</a></div>
                                            <div class="btn_blk mb-5 pb-3">
                                                <a href="#all_categories" class="site_btn run_btn"><img src="<?= $base_url ?>assets/images/icon-filter.svg" alt=""> Filter</a>
                                            </div>
                                            <div class="fs_6 fw_600 mb-4 pb-4"><a href="<?= $base_url ?>categories-list.php" class="text-decoration-underline">South America</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fig"><img src="<?= $base_url ?>assets/images/agustin-diaz-gargiulo-7F65HDP0-E0-unsplash (2) 1.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="all_categories">
                        <div class="contain-fluid">
                            <div class="outer">
                                <div id="filter">
                                    <div class="scroller">
                                        <form action="" method="POST">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="Reviews">
                    <div class="contain-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="review_top_blk">
                                    <div class="total_review">
                                        <div class="top d-flex align-items-center mb-4">
                                            <strong class="fs_2">4.9</strong>
                                            <i class="star"></i>
                                        </div>
                                        <strong>32 Reviews</strong>
                                    </div>
                                    <div class="rating_progress fw_500">
                                        <table>
                                            <tbody>
                                                <tr class="active">
                                                    <td>5</td>
                                                    <td><i class="star"></i></td>
                                                    <td>
                                                        <div class="bar">
                                                            <div style="width: 100%;"></div>
                                                        </div>
                                                    </td>
                                                    <td class="num">(27)</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><i class="star"></i></td>
                                                    <td>
                                                        <div class="bar">
                                                            <div style="width: 80%;"></div>
                                                        </div>
                                                    </td>
                                                    <td class="num">(2)</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><i class="star"></i></td>
                                                    <td>
                                                        <div class="bar">
                                                            <div style="width: 60%;"></div>
                                                        </div>
                                                    </td>
                                                    <td class="num">(0)</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="star"></i></td>
                                                    <td>
                                                        <div class="bar">
                                                            <div style="width: 40%;"></div>
                                                        </div>
                                                    </td>
                                                    <td class="num">(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="star"></i></td>
                                                    <td>
                                                        <div class="bar">
                                                            <div style="width: 20%;"></div>
                                                        </div>
                                                    </td>
                                                    <td class="num">(2)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn_blk ms-auto">
                                        <button class="site_btn pop_btn" data-popup="review"><img src="<?= $base_url ?>assets/images/icon-writing.svg" alt=""> Write a Review</button>
                                    </div>
                                </div>
                                <div class="sort_top_blk mt-5">
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
                                <div class="review_blk_wrap">
                                    <div class="review_blk">
                                        <div class="ico fill round">
                                            <img src="<?= $base_url ?>assets/images/users/1.jpg" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="head">
                                                <h6 class="font_1">Jackie.B</h6>
                                                <div class="locate">Homer, Alaska</div>
                                                <span class="time">20 days ago</span>
                                            </div>
                                            <div class="rating">
                                                <div class="rateYo"></div> 4.9
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'sLorem Ipsum is simply dummy text of the printing industry's </p>
                                            <div class="age">Age: <span>55-64</span></div>
                                            <div class="recommend">
                                                Recommends this product
                                                <img src="<?= $base_url ?>assets/images/icon-check.svg" alt="">
                                                Yes!
                                            </div>
                                            <div class="videos">
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_1.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/candy_02.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/shop_collection_03.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tags">
                                                <span>Helpful:</span>
                                                <ul>
                                                    <li><button type="button">Yes - 14</button></li>
                                                    <li><button type="button">No - 0</button></li>
                                                    <li><button type="button">Report as inappropriate</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_blk">
                                        <div class="ico fill round">
                                            <img src="<?= $base_url ?>assets/images/users/2.jpg" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="head">
                                                <h6 class="font_1">Jackie.B</h6>
                                                <div class="locate">Homer, Alaska</div>
                                                <span class="time">20 days ago</span>
                                            </div>
                                            <div class="rating">
                                                <div class="rateYo"></div> 4.9
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'sLorem Ipsum is simply dummy text of the printing industry's </p>
                                            <div class="age">Age: <span>55-64</span></div>
                                            <div class="recommend">
                                                Recommends this product
                                                <img src="<?= $base_url ?>assets/images/icon-check.svg" alt="">
                                                Yes!
                                            </div>
                                            <div class="videos">
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_1.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/candy_02.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/shop_collection_03.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tags">
                                                <span>Helpful:</span>
                                                <ul>
                                                    <li><button type="button">Yes - 14</button></li>
                                                    <li><button type="button">No - 0</button></li>
                                                    <li><button type="button">Report as inappropriate</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_blk">
                                        <div class="ico fill round">
                                            <img src="<?= $base_url ?>assets/images/users/3.jpg" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="head">
                                                <h6 class="font_1">Jackie.B</h6>
                                                <div class="locate">Homer, Alaska</div>
                                                <span class="time">20 days ago</span>
                                            </div>
                                            <div class="rating">
                                                <div class="rateYo"></div> 4.9
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'sLorem Ipsum is simply dummy text of the printing industry's </p>
                                            <div class="age">Age: <span>55-64</span></div>
                                            <div class="recommend">
                                                Recommends this product
                                                <img src="<?= $base_url ?>assets/images/icon-check.svg" alt="">
                                                Yes!
                                            </div>
                                            <div class="videos">
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_1.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/candy_02.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/shop_collection_03.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tags">
                                                <span>Helpful:</span>
                                                <ul>
                                                    <li><button type="button">Yes - 14</button></li>
                                                    <li><button type="button">No - 0</button></li>
                                                    <li><button type="button">Report as inappropriate</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_blk">
                                        <div class="ico fill round">
                                            <img src="<?= $base_url ?>assets/images/users/4.jpg" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="head">
                                                <h6 class="font_1">Jackie.B</h6>
                                                <div class="locate">Homer, Alaska</div>
                                                <span class="time">20 days ago</span>
                                            </div>
                                            <div class="rating">
                                                <div class="rateYo"></div> 4.9
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'sLorem Ipsum is simply dummy text of the printing industry's </p>
                                            <div class="age">Age: <span>55-64</span></div>
                                            <div class="recommend">
                                                Recommends this product
                                                <img src="<?= $base_url ?>assets/images/icon-check.svg" alt="">
                                                Yes!
                                            </div>
                                            <div class="videos">
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_2.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_1.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/candy_02.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                                <div class="vid_col">
                                                    <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/shop_collection_03.jpg');">
                                                        <button type="button" class="play_btn"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tags">
                                                <span>Helpful:</span>
                                                <ul>
                                                    <li><button type="button">Yes - 14</button></li>
                                                    <li><button type="button">No - 0</button></li>
                                                    <li><button type="button">Report as inappropriate</button></li>
                                                </ul>
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
                </div>
                <div class="tab-pane fade" id="QstAns">
                    <div class="contain-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="top_head">
                                    <h5 class="font_1 fw_700 text-uppercase">Questions & Answers</h5>
                                    <div class="btn_blk">
                                        <button type="button" class="site_btn px pop_btn mobile_100" data-popup="ask-question">Ask a Question</button>
                                    </div>
                                </div>
                                <div class="sort_top_blk mt-5">
                                    <span class="fw_600 align-self-center">1–10 of 12 Questions</span>
                                    <div class="sort_blk">
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">
                                                <strong class="fs_6 fw_600">Sort By:</strong>
                                                <span>Newest</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                                <li><button type="button">Popular</button></li>
                                                <li><button type="button">Popular 01</button></li>
                                                <li><button type="button">Popular 02</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer_blk_wrap">
                                    <div class="answer_blk">
                                        <div class="head">
                                            <h6 class="font_1">Russ1663</h6>
                                            <span class="time">20 days ago</span>
                                            <span class="total_ans color">2 Answers</span>
                                        </div>
                                        <div class="qst fw_600">Buyer Question: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae necessitatibus odio corporis iusto atque fuga ab modi dolorum ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur adipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur aorem ipsum, ddipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="btn_blk mt-4">
                                            <button type="button" class="site_btn px simple stroke pop_btn" data-popup="post-answer">Answer the Question</button>
                                        </div>
                                        <div class="tags">
                                            <span>Helpful:</span>
                                            <ul>
                                                <li><button type="button">Yes - 14</button></li>
                                                <li><button type="button">No - 0</button></li>
                                                <li><button type="button">Report as inappropriate</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="answer_blk">
                                        <div class="head">
                                            <h6 class="font_1">Russ1663</h6>
                                            <span class="time">20 days ago</span>
                                            <span class="total_ans color">2 Answers</span>
                                        </div>
                                        <div class="qst fw_600">Buyer Question: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae necessitatibus odio corporis iusto atque fuga ab modi dolorum ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur adipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur aorem ipsum, ddipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="btn_blk mt-4">
                                            <button type="button" class="site_btn px simple stroke pop_btn" data-popup="post-answer">Answer the Question</button>
                                        </div>
                                        <div class="tags">
                                            <span>Helpful:</span>
                                            <ul>
                                                <li><button type="button">Yes - 14</button></li>
                                                <li><button type="button">No - 0</button></li>
                                                <li><button type="button">Report as inappropriate</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="answer_blk">
                                        <div class="head">
                                            <h6 class="font_1">Russ1663</h6>
                                            <span class="time">20 days ago</span>
                                            <span class="total_ans color">2 Answers</span>
                                        </div>
                                        <div class="qst fw_600">Buyer Question: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae necessitatibus odio corporis iusto atque fuga ab modi dolorum ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur adipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur aorem ipsum, ddipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="btn_blk mt-4">
                                            <button type="button" class="site_btn px simple stroke pop_btn" data-popup="post-answer">Answer the Question</button>
                                        </div>
                                        <div class="tags">
                                            <span>Helpful:</span>
                                            <ul>
                                                <li><button type="button">Yes - 14</button></li>
                                                <li><button type="button">No - 0</button></li>
                                                <li><button type="button">Report as inappropriate</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="answer_blk">
                                        <div class="head">
                                            <h6 class="font_1">Russ1663</h6>
                                            <span class="time">20 days ago</span>
                                            <span class="total_ans color">2 Answers</span>
                                        </div>
                                        <div class="qst fw_600">Buyer Question: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae necessitatibus odio corporis iusto atque fuga ab modi dolorum ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur adipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur aorem ipsum, ddipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                        <div class="btn_blk mt-4">
                                            <button type="button" class="site_btn px simple stroke pop_btn" data-popup="post-answer">Answer the Question</button>
                                        </div>
                                        <div class="tags">
                                            <span>Helpful:</span>
                                            <ul>
                                                <li><button type="button">Yes - 14</button></li>
                                                <li><button type="button">No - 0</button></li>
                                                <li><button type="button">Report as inappropriate</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_blk justify-content-center mt-5 pt-3">
                                    <a href="?" class="site_btn px simple stroke">Load More</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-10">
                                <div class="question_blk">
                                    <h5 class="font_1 fw_700 text-uppercase">Questions & Answers</h5>
                                    <div class="btn_blk">
                                        <button class="site_btn text pop_btn font_1 text-decoration-underline text-black opacity-50" data-popup="ask-question">Be the first to ask a question about this product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="nutrition">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-12">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Nutritional Information</h3>
                                        <table class="w-100 fs_6 fw_600">
                                            <tbody>
                                                <tr>
                                                    <td>Serving Size 1 Cookie (19g)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Serving Size Per Container 10</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <hr class="my-2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Amount Per Serving</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Calories 90</td>
                                                    <td>Calories from Fat 30</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <hr class="my-2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>% Daily Value*</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Fat 3.5g</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturated Fat 1g</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Trans Fat 0g</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Chlolesterol 5mg</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Sodium 25mg</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Carbohydrates</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturated Fat 1g</td>
                                                    <td>5 %</td>
                                                </tr>
                                                <tr>
                                                    <td>Trans Fat 0g</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="review">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-12">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">My Review for [Product Name]</h3>
                                        <p>Required fields are marked with*</p>
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="leave_rating d-md-flex align-items-center">
                                                        <h5 class="font_1 require mb-0 me-4">Product Rating</h5>
                                                        <div class="rateYo" data-rateyo-star-width="3.2rem" data-rateyo-spacing="1.4rem" data-rateyo-read-only="false"></div>
                                                        <span class="fw_600 ms-3 color">Good</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h5 class="font_1 require">Review Title</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Give your review a title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h5 class="font_1 require">Review</h5>
                                                    <div class="form_blk">
                                                        <textarea name="" id="" class="input" placeholder="Write your comments here"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input h-auto btn_blk py-4">
                                                        <button type="button" class="site_btn md simple stroke">Add Photo</button>
                                                        <button type="button" class="site_btn md simple stroke">Add Video</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="recommend_prod d-md-flex align-items-center justify-content-between">
                                                        <h5 class="font_1 mb-0">Would you recommend this product to a friend?</h5>
                                                        <div class="btn_blk">
                                                            <button type="button" class="site_btn sm">Yes</button>
                                                            <button type="button" class="site_btn sm gray">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Age Range</h5>
                                                    <div class="form_blk">
                                                        <select name="" id="" class="input">
                                                            <option value="">Select</option>
                                                            <option value="">Option</option>
                                                            <option value="">Option</option>
                                                            <option value="">Option</option>
                                                            <option value="">Option</option>
                                                            <option value="">Option</option>
                                                            <option value="">Option</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Location</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Example: Seattle,WA">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Email</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Enter your email (private)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Nickname</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Enter your name (public)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_blk">
                                                        <div class="lbl_btn">
                                                            <input type="checkbox" name="agree" id="agree">
                                                            <label for="agree">I agree to the <a href="<?= $base_url ?>terms-conditions.php" target="_blank" class="color text-decoration-underline">term & conditions</a></label>
                                                        </div>
                                                    </div>
                                                    <p>You may receive emails regarding this submission. Any emails will include the ability to opt out of future communications.</p>
                                                </div>
                                            </div>
                                            <div class="btn_blk justify-content-center mt-5">
                                                <button type="submit" class="site_btn longest">Post Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="ask-question">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-12">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Ask a Question</h3>
                                        <p>Required fields are marked with*</p>
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="font_1 require">Question</h5>
                                                    <div class="form_blk">
                                                        <textarea name="" id="" class="input" placeholder="Write your question here"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h5 class="font_1 require">Nickname</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Enter your name (public)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Email</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Enter your email (private)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="font_1 require">Location</h5>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input" placeholder="Example: Seattle,WA">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_blk">
                                                        <div class="lbl_btn">
                                                            <input type="checkbox" name="agree" id="agree">
                                                            <label for="agree">I agree to the <a href="<?= $base_url ?>terms-conditions.php" target="_blank" class="color text-decoration-underline">term & conditions</a></label>
                                                        </div>
                                                    </div>
                                                    <p>You may receive emails regarding this submission. Any emails will include the ability to opt out of future communications.</p>
                                                </div>
                                            </div>
                                            <div class="btn_blk justify-content-center mt-5">
                                                <button type="submit" class="site_btn longest">Post Question</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="post-answer">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-12">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Post Answer</h3>
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="answer_blk">
                                                        <div class="head">
                                                            <h6 class="font_1">Russ1663</h6>
                                                            <span class="time">20 days ago</span>
                                                            <span class="total_ans color">2 Answers</span>
                                                        </div>
                                                        <div class="qst fw_600">Buyer Question: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae necessitatibus odio corporis iusto atque fuga ab modi dolorum ?</div>
                                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur adipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                                        <div class="ans"><span class="color fw_600">Answer:</span> is simply dummy text of the printing and typesetting industry amet consectetur aorem ipsum, ddipisicing elit. Lorem printing and typesetting industry. Lorem ?</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h5 class="font_1 require">Answer</h5>
                                                    <div class="form_blk">
                                                        <textarea name="" id="" class="input" placeholder="Write your question here"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_blk">
                                                        <div class="lbl_btn">
                                                            <input type="checkbox" name="agree" id="agree">
                                                            <label for="agree">I agree to the <a href="<?= $base_url ?>terms-conditions.php" target="_blank" class="color text-decoration-underline">term & conditions</a></label>
                                                        </div>
                                                    </div>
                                                    <p>You may receive emails regarding this submission. Any emails will include the ability to opt out of future communications.</p>
                                                </div>
                                            </div>
                                            <div class="btn_blk justify-content-center mt-5">
                                                <button type="submit" class="site_btn longest">Post Answer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="restock">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-md-12">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Add Email to Receive Restock Notification</h3>
                                        <p class="fs_3">Chocolate Mini Cookies</p>
                                        <p>Enter Your Email in the Field</p>
                                        <form action="" method="POST">
                                            <div class="form_blk input">
                                                <input type="text" name="" id="" class="input" placeholder="Example: yourname@gmail.com">
                                                <!-- <button type="submit" class="site_btn md">Send</button> -->
                                                <button type="button" class="site_btn md pop_btn" data-popup="success">Send</button>
                                            </div>
                                        </form>
                                        <div class="explore_prod overflow-hidden mt-5 pt-3">
                                            <h3 class="text-center mb-5">Explore Our Products</h3>
                                            <div id="slick-restock" class="slick-carousel slick-slider">
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
                                        <h3>Your Notification Has Been Registered</h3>
                                        <p class="fs_5">You are on the list! We’ll notify you when [product] is back in stock. Thanks for your interest :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- detail -->


        <section id="smiler_products" class="position-relative overflow-hidden pt-4">
            <div class="contain-fluid">
                <div class="content text-center mb-5 pb-3">
                    <h2 class="mb-0">You May Also Like</h2>
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
                $(document).on("click", "#location .run_btn", function() {
                    $("#all_categories").slideDown();
                })
            });
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>