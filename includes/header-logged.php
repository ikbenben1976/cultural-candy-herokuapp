<header>
    <div id="pageloader">
        <div class="loader">
            <!-- <div class="logo">
                <a href="<?= $base_url ?>index.php">
                    <img src="<?= $base_url ?>assets/images/logo-dark.svg" alt="">
                </a>
            </div> -->
        </div>
    </div>
    <div class="strip">
        <div class="contain-fluid d-flex align-items-center h-100">
            <div class="w-100">
                <div class="strip_row row align-items-center">
                    <div class="col col-lg-4 d-none d-lg-flex justify-content-start">
                        <p class="font_2 fw_700 text-uppercase"><a href="<?= $base_url ?>quiz.php">TRAVEL TO YOUR SWEET SPOT™</a></p>
                    </div>
                    <div class="col col-lg-4 d-flex justify-content-center">
                        <p><a href="<?= $base_url ?>faq.php">Free Shipping on Orders Over $50*</a></p>
                    </div>
                    <div class="col col-lg-4 d-none d-lg-flex justify-content-end">
                        <p class="d-inline-flex align-items-center font_2 fw_700 text-uppercase"><img src="<?= $base_url ?>assets/images/vector-group.svg" alt=""> <a href="<?= $base_url ?>sweet-exchange.php">Sweet Exchanges Community</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contain-fluid position-relative">
        <div class="logo">
            <a href="<?= $base_url ?>index.php">
                <img src="<?= $base_url ?>assets/images/logo_light.svg" alt="">
            </a>
        </div>
        <button type="button" class="toggle"><span></span></button>
        <nav class="ease">
            <div id="nav" class="font_2">
                <ul id="lst">
                    <li class="<?php if ($page == "candy-plan") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>candy-plan.php">Candy Plan</a>
                    </li>
                    <li class="<?php if ($page == "gifts") {
                                    echo 'active';
                                } ?> drop">
                        <a href="javascript:void(0)" id="gift_btn">Gifts</a>
                        <div id="sub_menu_gift">
                            <button type="button" class="back_btn"></button>
                            <div class="scroller">
                                <div class="contain-fluid">
                                    <div class="menu_row row">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">Our Signature Gifts</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>sweet-spot-gift.php">Sweet Spot™</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Around the World Box</a></li>
                                                <li><a href="<?= $base_url ?>sweet-spot-gift.php">Gift Cards</a></li>
                                                <li><a href="<?= $base_url ?>candy-plan.php">Candy Plan™</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">More Gift Ideas</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>collections.php">Holiday Collection Box</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Vegan Gummies of the World</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Crowd Pleasers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">Corporate Gifts</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>corporate-gifting.php">Corporate Gifting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?php if ($page == "explore") {
                                    echo 'active';
                                } ?> drop">
                        <a href="javascript:void(0)" id="explore_btn">Explore</a>
                        <div id="sub_menu_explore">
                            <button type="button" class="back_btn"></button>
                            <div class="scroller">
                                <div class="contain-fluid">
                                    <div class="menu_row row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                            <h6 class="color2">Explore Cultural Candy</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>explore-landing.php">Brand Story</a></li>
                                                <li><a href="<?= $base_url ?>explore-landing.php">Connection to People & Cultures</a></li>
                                                <li><a href="<?= $base_url ?>explore-landing.php">Connection to Places</a></li>
                                                <li><a href="<?= $base_url ?>explore-landing.php">Connection to Art</a></li>
                                                <li><a href="<?= $base_url ?>explore-landing.php">Connection to Languages</a></li>
                                            </ul>
                                            <h6 class="color2">Community</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>sweet-exchange.php">Sweet Exchanges Community</a></li>
                                            </ul>
                                            <h6 class="color2">Shop</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>shop-all.php">Shop All Cultural Candy</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                            <h6 class="color2">By Region</h6>
                                            <ul class="region_tabs nav">
                                                <li>
                                                    <button type="button" class="mini_region_blk active" data-bs-toggle="tab" data-bs-target="#RegionNAmerica">
                                                        <img src="<?= $base_url ?>assets/images/region_north_america.png" alt="">
                                                        <span>North America</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionSAmerica">
                                                        <img src="<?= $base_url ?>assets/images/region_south_america.png" alt="">
                                                        <span>Central & South America</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionEurope">
                                                        <img src="<?= $base_url ?>assets/images/region_europe.png" alt="">
                                                        <span>Europe</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionAfrica">
                                                        <img src="<?= $base_url ?>assets/images/region_africa.png" alt="">
                                                        <span>Africa</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionAsia">
                                                        <img src="<?= $base_url ?>assets/images/region_asia.png" alt="">
                                                        <span>Asia</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionOceania">
                                                        <img src="<?= $base_url ?>assets/images/region_oceania.png" alt="">
                                                        <span>Oceania</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4">
                                            <h6 class="color2">Countries</h6>
                                            <div class="tab-content">
                                                <div id="RegionNAmerica" class="tab-pane fade active show">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="RegionSAmerica" class="tab-pane fade">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="RegionEurope" class="tab-pane fade">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="RegionAfrica" class="tab-pane fade">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="RegionAsia" class="tab-pane fade">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="RegionOceania" class="tab-pane fade">
                                                    <div class="menu_row row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <ul>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                                <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?php if ($page == "quiz") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>quiz.php">Quiz</a>
                    </li>
                </ul>
                <ul id="cta">
                    <li class="<?php if ($page == "shop") {
                                    echo 'active';
                                } ?> drop">
                        <a href="javascript:void(0)" class="shop_btn" id="shop_btn">Shop</a>
                        <div id="sub_menu_shop">
                            <button type="button" class="back_btn"></button>
                            <div class="scroller">
                                <div class="contain-fluid">
                                    <h5 class="mb-5 pb-3 text-decoration-underline"><a href="<?= $base_url ?>shop-all.php">Shop All Cultural Candy</a></h5>
                                    <div class="menu_row row">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">By Category</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>categories.php">Caramel, Fudge & Toffee</li>
                                                <li><a href="<?= $base_url ?>categories.php">Marshmallows, Nougat & Taffy</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Chocolate</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Gum & Mints</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Gummies, Chewies & Jellies</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Hard Candy & Lollipops</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Licorice</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">Better for You</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>categories-list.php">Vegetarian</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Vegan </a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Gluten-Free</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Halal</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Sodium-Free</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Dairy-Free</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Low-Fat</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Kosher</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Sugar-Conscious</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Organic</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Paleo-Friendly</a></li>
                                                <li><a href="<?= $base_url ?>categories-list.php">Keto-Friendly</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">By Collection</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>collections.php">Around the World</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Kosher Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Keto-Friendly Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Vegan Gummies of The World</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Ukraine</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Crowd Pleasers</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Candy to Share</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Argentinian Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Belgian Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Brazilian Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">British Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">French Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">German Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">Italian Candy</a></li>
                                                <li><a href="<?= $base_url ?>collections.php">All Collections</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">By Occasion</h6>
                                            <ul>
                                                <li><a href="<?= $base_url ?>categories.php">French-American Heritage Month</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Independence Day</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">International Day of Friendship</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">World Humanitarian Day</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Hispanic Heritage Month</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">Mexican Independence Day</a></li>
                                                <li><a href="<?= $base_url ?>categories.php">All Occasions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">By Region</h6>
                                            <ul class="region_tabs nav">
                                                <li>
                                                    <button type="button" class="mini_region_blk active" data-bs-toggle="tab" data-bs-target="#RegionNAmerica2">
                                                        <img src="<?= $base_url ?>assets/images/region_north_america.png" alt="">
                                                        <span>North America</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionSAmerica2">
                                                        <img src="<?= $base_url ?>assets/images/region_south_america.png" alt="">
                                                        <span>Central & South America</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionEurope2">
                                                        <img src="<?= $base_url ?>assets/images/region_europe.png" alt="">
                                                        <span>Europe</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionAfrica2">
                                                        <img src="<?= $base_url ?>assets/images/region_africa.png" alt="">
                                                        <span>Africa</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionAsia2">
                                                        <img src="<?= $base_url ?>assets/images/region_asia.png" alt="">
                                                        <span>Asia</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RegionOceania2">
                                                        <img src="<?= $base_url ?>assets/images/region_oceania.png" alt="">
                                                        <span>Oceania</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <h6 class="color2">Countries</h6>
                                            <div class="tab-content">
                                                <div id="RegionNAmerica2" class="tab-pane fade active show">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                                <div id="RegionSAmerica2" class="tab-pane fade">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                                <div id="RegionEurope2" class="tab-pane fade">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                                <div id="RegionAfrica2" class="tab-pane fade">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                                <div id="RegionAsia2" class="tab-pane fade">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                                <div id="RegionOceania2" class="tab-pane fade">
                                                    <ul>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Guyana</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a></li>
                                                        <li><a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a></li>
                                                    </ul>
                                                    <div class="mt-3 pt-3">
                                                        <a href="?" class="fw_600 text-decoration-underline small">All Countries</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="ico_lst">
                <li class="user_ico_btn">
                    <a href="javascript:void(0)" id="user_btn" class="ico_btn">
                        <img src="<?= $base_url ?>assets/images/icon-user.svg" alt="">
                    </a>
                    <div id="logon_menu">
                        <div class="scroller">
                            <ul class="fs_6">
                                <li><a href="<?= $base_url ?>account.php">Account <u>Hello, Ben</u></a></li>
                                <li><a href="<?= $base_url ?>orders.php">Orders <u>Track + Manage</u></a></li>
                                <li><a href="<?= $base_url ?>recently-viewed.php">Recently Viewed <u>See Items</u></a></li>
                                <li class="d-sm-none"><a href="<?= $base_url ?>wishlist.php">Wishlist</u></a></li>
                                <li><a href="<?= $base_url ?>shopping-cart-empty.php">Saved for Later <u>0 Items</u></a></li>
                                <li><a href="<?= $base_url ?>rewards-program-logged.php">Rewards Program</a></li>
                                <li><a href="<?= $base_url ?>sweet-exchange.php">Sweet Exchanges Community</a></li>
                                <li><a href="<?= $base_url ?>signout.php">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="heart_ico_btn">
                    <a href="<?= $base_url ?>wishlist.php" id="heart_btn" class="ico_btn">
                        <img src="<?= $base_url ?>assets/images/icon-heart.svg" alt="">
                    </a>
                </li>
                <li class="cart_ico_btn">
                    <a href="<?= $base_url ?>shopping-cart.php" id="cart_btn" class="ico_btn">
                        <img src="<?= $base_url ?>assets/images/icon-basket.svg" alt="">
                        <span>2</span>
                    </a>
                </li>
                <li class="srch_ico_btn">
                    <a href="<?= $base_url ?>search.php" id="srch_btn" class="ico_btn">
                        <img src="<?= $base_url ?>assets/images/icon-search.svg" alt="">
                    </a>
                </li>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->