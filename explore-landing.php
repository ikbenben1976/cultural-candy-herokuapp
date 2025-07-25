<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Landing — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="explore">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="banner" style="background-image: url('<?= $base_url ?>assets/images/explore_mask_group.jpg')">
            <div class="contain-fluid z_up">
                <div class="flex_blk align-items-center">
                    <div class="row">
                        <div class="col-lg-7 col-md-8">
                            <div class="content">
                                <h2 class="">Cultural Candy Exploration</h2>
                                <p class="fs_5">Candy is a universal language and represents the perfect "tour guide" for global exploration. Whether the consumer is motivated by nostalgia or curiosity about new and different cultures, Cultural Candy helps consumers travel to their sweet spot and experience a Cultural Candy connection.</p>
                                <div class="btn_blk">
                                    <a href="#what_candy" class="site_btn long blank light longest mobile_100 run_btn">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plan_banner -->


        <section id="what_candy">
            <div class="contain-fluid fs_6">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="content text-center mb-5 pb-5">
                            <h2>What is Cultural Candy?</h2>
                            <p>Cultural candy is a metaphor as well as double entendre. When we explore another culture, we connect to it. With connection comes understanding and empathy. This connectivity to other cultures is eye-opening, fun and sweet, just like the candy that we bring from around the world for our consumers. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font_1 fw_700 mb-5">Brand Story</h3>
                        <div class="clip_text">
                            <div class="txt">
                                <p>Cultural Candy is much more than an international candy store. It is a place of exploration, cultural connection, and introduction to places far beyond reach for many. Candy is universal and represents the perfect ‘tour guide’ for global exploration. Whether you are making new memories or re-living them, Cultural Candy can be that point of connection.</p>
                                <p>Never flying by the seat of our pants, our candies are thoughtfully selected, creating.</p>
                                <p>Cultural candy is a metaphor as well as double entendre. When we explore another culture, we connect to it. With connection comes understanding and empathy. This connectivity to other cultures is eye-opening, fun and sweet, just like the candy that we bring from around the world for our consumers. </p>
                            </div>
                            <button type="button" class="site_btn text see_btn" data-more="See More" data-less="See Less"><i></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <h3 id="jump_to" class="font_1 fw_700 mb-5">Jump To:</h3>
                        <ol class="jump_list fw_700">
                            <li><a href="#demo" class="move_btn">Connection to People & Cultures</a></li>
                            <li><a href="#explore_country" class="move_btn">Connection to Places</a></li>
                            <li><a href="#culture_art" class="move_btn">Connection to Art</a></li>
                            <li><a href="#connect_lang" class="move_btn">Connection to Languages</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- what_candy -->


        <section id="jump_bar">
            <div class="contain-fluid">
                <div class="inside">
                    <ol class="fs_6">
                        <li><a href="#demo" class="move_btn active">Connection to People & Cultures</a></li>
                        <li><a href="#explore_country" class="move_btn">Connection to Places</a></li>
                        <li><a href="#culture_art" class="move_btn">Connection to Art</a></li>
                        <li><a href="#connect_lang" class="move_btn">Connection to Languages</a></li>
                    </ol>
                    <a href="#banner" class="up_btn fs_6 fw_700 run_btn"><img src="<?= $base_url ?>assets/images/icon-arrow-up.svg" alt=""><span>Back to top</span></a>
                </div>
            </div>
        </section>
        <!-- jump_bar -->


        <section id="demo" style="background-image: url('<?= $base_url ?>assets/images/maker-series-banner.jpg');">
            <div class="contain-fluid z_up">
                <div class="flex_blk align-items-center justify-content-center">
                    <div class="content text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <h2 class="mb-4">Cultural Candy Maker’s Series</h2>
                                <p class="fs_6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video_bar">
                    <button type="button" class="play"></button>
                    <div class="bar">
                        <div style="width: 40%;"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- demo -->


        <section id="explore_cards" class="overflow-hidden">
            <div class="contain-fluid">
                <div class="slick-categories slick-carousel slick-slider">
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_01.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Chile</span>
                                    <img src="<?= $base_url ?>assets/images/flag_chile.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Chile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_02.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Spain</span>
                                    <img src="<?= $base_url ?>assets/images/flag_spain.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Spain</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_03.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Mexico</span>
                                    <img src="<?= $base_url ?>assets/images/flag_mexico.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Mexico</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_04.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Argentina</span>
                                    <img src="<?= $base_url ?>assets/images/flag_argentina.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Argentina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_05.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Colombia</span>
                                    <img src="<?= $base_url ?>assets/images/flag_colombia.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Colombia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_06.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>The Netherlands</span>
                                    <img src="<?= $base_url ?>assets/images/flag_netherlands.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Netherlands</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_07.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Brazil</span>
                                    <img src="<?= $base_url ?>assets/images/flag_brazil.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Brazil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explore_card_blk">
                            <div class="vid_blk" style="background-image: url('<?= $base_url ?>assets/images/country_08.jpg');">
                                <button type="button" class="play_btn"></button>
                            </div>
                            <div class="txt">
                                <div class="flag">
                                    <span>Japan</span>
                                    <img src="<?= $base_url ?>assets/images/flag_japan.png" alt="">
                                </div>
                                <h6 class="font_1 fw_700">Lorem quis sunt magna </h6>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem </p>
                                <div class="btn_blk justify-content-between">
                                    <a href="<?= $base_url ?>story-article.php" class="site_btn text font_1">Read the Full Story</a>
                                    <a href="<?= $base_url ?>country-detail.php" class="site_btn sm">Explore Japan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- explore_cards -->


        <section id="explore_country" class="overflow-hidden">
            <div id="slick-country" class="slick-carousel slick-slider">
                <div class="item">
                    <div class="fig">
                        <img src="<?= $base_url ?>assets/images/spain_wallpaper.jpg" alt="">
                    </div>
                    <div class="contain-fluid">
                        <div class="flex_blk align-items-center">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content fs_6">
                                            <h2>Spain / España</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            <div class="btn_blk mt-5 pt-3">
                                                <a href="<?= $base_url ?>country-detail.php" class="site_btn long blank light mobile_100 longest">Explore More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="fig">
                        <img src="<?= $base_url ?>assets/images/pakistan_wallpaper.jpg" alt="">
                    </div>
                    <div class="contain-fluid">
                        <div class="flex_blk align-items-center">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content fs_6">
                                            <h2>Pakistan / پاکستان</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            <div class="btn_blk mt-5 pt-3">
                                                <a href="<?= $base_url ?>country-detail.php" class="site_btn long blank light mobile_100 longest">Explore More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="fig">
                        <img src="<?= $base_url ?>assets/images/turkey_wallpaper.jpg" alt="">
                    </div>
                    <div class="contain-fluid">
                        <div class="flex_blk align-items-center">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content fs_6">
                                            <h2>Turkey / Türkiye</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            <div class="btn_blk mt-5 pt-3">
                                                <a href="<?= $base_url ?>country-detail.php" class="site_btn long blank light mobile_100 longest">Explore More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- explore_country -->


        <section id="explore_world" style="background-image: url('<?= $base_url ?>assets/images/stars_mask.jpg');">
            <div class="contain-fluid z_up">
                <div class="content mb-5 pb-3">
                    <h2 class="mb-4">Explore the World</h2>
                    <h5 class="color font_1 mb-0">Choose your destination</h5>
                </div>
                <div class="explore_bar fs_6 fw_600">
                    <div class="btns">
                        <button type="button" class="bars_btn"><img src="<?= $base_url ?>assets/images/icon-bars.svg" alt=""></button>
                        <button type="button" class="find_btn"><img src="<?= $base_url ?>assets/images/icon-find.svg" alt=""></button>
                        <button type="button" class="plus_btn"><img src="<?= $base_url ?>assets/images/icon-plus-circle.svg" alt=""></button>
                        <button type="button" class="minus_btn"><img src="<?= $base_url ?>assets/images/icon-minus-circle.svg" alt=""></button>
                    </div>
                    <div class="inner bars_tab">
                        <button type="button" class="x_btn"></button>
                        <div class="scroller scrollbar">
                            <h5>Most Popular Video</h5>
                            <ul>
                                <li><a href="?">Rudny Kazakhstan</a></li>
                                <li><a href="?">Biskra Algeria</a></li>
                                <li><a href="?">Pakistan</a></li>
                            </ul>
                            <h5>Most Recent Video</h5>
                            <ul>
                                <li><a href="?">Rudny Kazakhstan</a></li>
                                <li><a href="?">Biskra Algeria</a></li>
                                <li><a href="?">Pakistan</a></li>
                                <li><a href="?">China</a></li>
                                <li><a href="?">South Korea</a></li>
                                <li><a href="?">Mexico</a></li>
                                <li><a href="?">Colombia</a></li>
                                <li><a href="?">Argentina</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner find_tab">
                        <button type="button" class="x_btn"></button>
                        <div class="scroller scrollbar">
                            <h5>Search Videos Here</h5>
                            <div class="form_blk">
                                <input type="text" name="" id="" class="input" placeholder="Search Videos">
                            </div>
                            <ul>
                                <li><a href="?">Rudny Kazakhstan</a></li>
                                <li><a href="?">Biskra Algeria</a></li>
                                <li><a href="?">Pakistan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas">
                <img src="<?= $base_url ?>assets/images/earth.png" alt="">
            </div>
        </section>
        <!-- explore_world -->


        <section id="culture_art">
            <div class="contain-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col_fig">
                        <div class="fig">
                            <a href="<?= $base_url ?>explore-gallery.php">
                                <img src="<?= $base_url ?>assets/images/Group 42427.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col_txt">
                        <div class="content fs_6">
                            <h2>Connection to Art</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                        </div>
                    </div>
                </div>
                <div class="br"></div>
                <hr class="d-lg-none">
                <div class="br"></div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col_txt">
                        <div class="content fs_6">
                            <h2>Cultural Candy</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <p>A type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col_fig">
                        <div class="row">
                            <div class="col-6">
                                <div class="fig">
                                    <a href="<?= $base_url ?>explore-gallery.php">
                                        <img src="<?= $base_url ?>assets/images/art-design1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fig">
                                    <a href="<?= $base_url ?>explore-gallery.php">
                                        <img src="<?= $base_url ?>assets/images/art-design2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fig">
                                    <a href="<?= $base_url ?>explore-gallery.php">
                                        <img src="<?= $base_url ?>assets/images/art-design3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fig">
                                    <a href="<?= $base_url ?>explore-gallery.php">
                                        <img src="<?= $base_url ?>assets/images/art-design4.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- culture_art -->


        <section id="connect_lang">
            <div class="contain-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="fig mx-lg-5"><img src="<?= $base_url ?>assets/images/helloooooooo.svg" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content fs_6">
                            <h2>Connection to Languages</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            <div class="btn_blk mt-5">
                                <a href="<?= $base_url ?>story-article.php" class="site_btn long blank light mobile_100 longest">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- connect_lang -->


        <section id="live_radio">
            <div class="contain-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="text-center mb-5">Listen to Live Radio Stations Worldwide</h2>
                        <ul class="row justify-content-center nav">
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk active" data-bs-toggle="tab" data-bs-target="#RadioNAmerica">
                                    <img src="<?= $base_url ?>assets/images/region_north_america.png" alt="">
                                    <span>North America</span>
                                </button>
                            </li>
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RadioSAmerica">
                                    <img src="<?= $base_url ?>assets/images/region_south_america.png" alt="">
                                    <span>Central & South America</span>
                                </button>
                            </li>
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RadioEurope">
                                    <img src="<?= $base_url ?>assets/images/region_europe.png" alt="">
                                    <span>Europe</span>
                                </button>
                            </li>
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RadioAfrica">
                                    <img src="<?= $base_url ?>assets/images/region_africa.png" alt="">
                                    <span>Africa</span>
                                </button>
                            </li>
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RadioAsia">
                                    <img src="<?= $base_url ?>assets/images/region_asia.png" alt="">
                                    <span>Asia</span>
                                </button>
                            </li>
                            <li class="col-6 col-sm-auto">
                                <button type="button" class="mini_region_blk" data-bs-toggle="tab" data-bs-target="#RadioOceania">
                                    <img src="<?= $base_url ?>assets/images/region_oceania.png" alt="">
                                    <span>Oceania</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-5">
                    <div id="RadioNAmerica" class="in_blk tab-pane fade active show">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_north_america.png" alt="">
                            <strong>North America</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="RadioSAmerica" class="in_blk tab-pane">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_south_america.png" alt="">
                            <strong>Central & South America</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="RadioEurope" class="in_blk tab-pane">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_europe.png" alt="">
                            <strong>Europe</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Colombia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="RadioAfrica" class="in_blk tab-pane">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_africa.png" alt="">
                            <strong>Africa</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="RadioAsia" class="in_blk tab-pane">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_asia.png" alt="">
                            <strong>Asia</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Brazil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="RadioOceania" class="in_blk tab-pane">
                        <a href="<?= $base_url ?>country-detail.php" class="title fs_5">
                            <img src="<?= $base_url ?>assets/images/region_oceania.png" alt="">
                            <strong>Oceania</strong>
                        </a>
                        <div class="row">
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="d-flex">
                                    <a href="<?= $base_url ?>country-detail.php" class="mini_country_blk"><img src="<?= $base_url ?>assets/images/flag.png" alt=""> Argentina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs_blk my-5 py-3">
                    <div class="flag"><img src="<?= $base_url ?>assets/images/FlagArgentina 2.png" alt=""><strong class="fs_5">Argentina</strong></div>
                    <ul class="tab_listing font_2 fs_6">
                        <li><button type="button" class="active">All</button></li>
                        <li><button type="button">Paris</button></li>
                        <li><button type="button">Dance</button></li>
                        <li><button type="button">News</button></li>
                        <li><button type="button">Hip Hop</button></li>
                        <li><button type="button">Electronica</button></li>
                    </ul>
                </div>
                <div class="row flex_row">
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn pause"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="radio_card">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/download 1.jpg" alt="">
                            </div>
                            <div class="txt">
                                <button type="button" class="mini_btn play"></button>
                                <h6 class="font_1 fw_700 mb-2">R - One Radio</h6>
                                <span class="fw_500">Listen Hits!</span>
                                <div class="flag">
                                    <img src="<?= $base_url ?>assets/images/flag.png" alt="">
                                    <span>Paris, lle-de-France, France</span>
                                </div>
                                <div class="tags">
                                    <span>Dance</span>
                                    <span>HipHop</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- live_radio -->


        <script>
            $(window).on("load", function() {
                $(document).on("click", ".explore_bar .bars_btn", function() {
                    $(".explore_bar .bars_tab").addClass("active");
                });
                $(document).on("click", ".explore_bar .find_btn", function() {
                    $(".explore_bar .find_tab").addClass("active");
                });
                $(document).on("click", ".explore_bar .inner .x_btn", function() {
                    $(".explore_bar .inner").removeClass("active");
                });
                $(document).on("click", ".move_btn", function(event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        jump_bar = $("#jump_bar").outerHeight();
                        console.log(jump_bar)
                        $("html, body").animate({
                                scrollTop: $(hash).offset().top - jump_bar,
                            },
                            10
                        );
                    }
                });
            });
        </script>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>