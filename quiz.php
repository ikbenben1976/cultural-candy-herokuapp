<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="quiz">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="quiz" class="sec_pad_top">
            <div class="quiz_banner" style="background-image: url('<?= $base_url ?>assets/images/quiz_mask_group.jpg');">
                <div class="contain-fluid text-center">
                    <div class="flex_blk align-items-center justify-content-center">
                        <div class="content fs_3 fw_500">
                            <h1>Travel to Your Sweet Spot Quiz</h1>
                            <p>With so many amazing treats from around the world, it’s hard to know where to start. Take the quiz and find your Sweet Spot.</p>
                            <div class="btn_blk mt-5 pt-3 justify-content-center">
                                <button type="button" class="site_btn longest start_quiz_btn">Start Quiz</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="POST">
                <div class="contain-fluid">
                    <div class="top_bar_wrap">
                        <ul class="top_bar fs_6 fw_600 text-center">
                            <li data-name="location">
                                <span>Location <i></i></span>
                            </li>
                            <li data-name="type">
                                <span>Type <i></i></span>
                            </li>
                            <li data-name="flavor">
                                <span>Flavor <i></i></span>
                            </li>
                            <li data-name="aroma">
                                <span>Aroma <i></i></span>
                            </li>
                            <li data-name="texture">
                                <span>Texture <i></i></span>
                            </li>
                            <li data-name="diet">
                                <span>Specialty Diet <i></i></span>
                            </li>
                            <li data-name="result">
                                <span>Result <i></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <fieldset data-name="location">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <h2>So...You Want to Explore</h2>
                                <p>Which continents are on your bucket list?</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Select all that apply</span>
                                </div>
                                <div class="row flex_row justify-content-center">
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country1">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_north_america.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">North America</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country2">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_south_america.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Central & South America</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country3">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_africa.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Africa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country4">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_europe.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Europe</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country5">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_oceania.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Australia</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 col-md-3 col-sm-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="quiz_country" id="quiz_country6">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/region_asia.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Asia</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back back_quiz_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Next Question</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="type">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <h2>Your Candy Options</h2>
                                <p>Are you ready to get out of your comfort zone? Select the candies that you are excited to try.</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Select all that apply</span>
                                </div>
                                <div class="row flex_row justify-content-center">
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option1">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_01.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Caramel, Fudge & Toffee</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option2">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_02.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gummies, Chewies & Jellies</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option3">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_03.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Chocolate</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option4">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_04.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Hard Candy & Lollipops</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option5">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_05.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Marshmallows, Nougat & Taffy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option6">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_06.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Licorice</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_option" id="candy_option7">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_option_07.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gum & Mints</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Next Question</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="flavor">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <h2>Did Someone Say Umami?</h2>
                                <p>Flavor combinations are so unique around the world. What flavors do you prefer the most?</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Rank from 1 to 5 in terms of preference with "1" being the most preferred</span>
                                </div>
                                <div class="drag_blk">
                                    <div class="row flex_row justify-content-center">
                                        <div class="col-auto">
                                            <div class="sq_blk round">
                                                <div class="inner">
                                                    <div class="icon"><img src="<?= $base_url ?>assets/images/candy_taste_01.png" alt=""></div>
                                                    <div class="txt">
                                                        <span class="fs_6 fw_600">Crumbly</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round">
                                                <div class="inner">
                                                    <div class="icon"><img src="<?= $base_url ?>assets/images/candy_taste_02.png" alt=""></div>
                                                    <div class="txt">
                                                        <span class="fs_6 fw_600">Chewy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round">
                                                <div class="inner">
                                                    <div class="icon"><img src="<?= $base_url ?>assets/images/candy_taste_03.png" alt=""></div>
                                                    <div class="txt">
                                                        <span class="fs_6 fw_600">Crunchy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round">
                                                <div class="inner">
                                                    <div class="icon"><img src="<?= $base_url ?>assets/images/candy_taste_04.png" alt=""></div>
                                                    <div class="txt">
                                                        <span class="fs_6 fw_600">Fluffy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round">
                                                <div class="inner">
                                                    <div class="icon"><img src="<?= $base_url ?>assets/images/candy_taste_05.png" alt=""></div>
                                                    <div class="txt">
                                                        <span class="fs_6 fw_600">Gooey</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs_6 mt-5 mb-4 opacity-50">Drag your product down to rank it</p>
                                    <div class="row flex_row justify-content-center">
                                        <div class="col-auto">
                                            <div class="sq_blk round empty">1</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round empty">2</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round empty">3</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round empty">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="sq_blk round empty">5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Next Question</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="aroma">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <h2>What’s That Smell?</h2>
                                <p>While exploring, the sights, sounds and especially smells can transport us. What are your favorite aromas?</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Select all that apply</span>
                                </div>
                                <div class="row flex_row justify-content-center">
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell1">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_01.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Caramel, Fudge & Toffee</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell2">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_02.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gummies, Chewies & Jellies</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell3">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_03.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Chocolate</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell4">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_04.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Hard Candy & Lollipops</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell5">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_05.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Marshmallows, Nougat & Taffy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell6">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_06.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Licorice</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_smell" id="candy_smell7">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_smell_07.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gum & Mints</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Next Question</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="texture">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <h2>Hooked on a Feeling</h2>
                                <p>If your mouth could talk, what texture(s) would it choose?</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Select all that apply</span>
                                </div>
                                <div class="row flex_row justify-content-center">
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling1">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_01.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Crumbly</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling2">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_02.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Chewy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling3">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_03.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Crunchy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling4">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_04.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Fluffy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling5">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_05.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gooey</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling6">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_06.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gummy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4">
                                        <div class="sq_blk">
                                            <input type="radio" name="candy_feeling" id="candy_feeling7">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/candy_feeling_07.png" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Hard</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Next Question</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="diet">
                    <div class="contain-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12 col-md-12">
                                <h2>Specialty Diet</h2>
                                <p>Thankfully, many specialty diets are international. Are there restrictions that you need to include?</p>
                                <div class="info_blk mb-5">
                                    <img src="<?= $base_url ?>assets/images/icon-info.svg" alt="">
                                    <span class="opacity-75">Select all that apply</span>
                                </div>
                                <div class="row flex_row justify-content-center">
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet1">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_01.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Vegetarian</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet2">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_02.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Vegan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill none">
                                            <input type="radio" name="diet" id="diet3">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_03.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Gluten-Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet4">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_04.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Halal</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet5">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_05.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Sodium-Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet6">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_06.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Dairy-Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet7">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_07.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Low-Fat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet8">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_08.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Kosher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill none">
                                            <input type="radio" name="diet" id="diet9">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_09.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Sugar-Concious</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet10">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_10.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Organic</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet11">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_11.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Paleo-Friendly</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sq_blk round fill">
                                            <input type="radio" name="diet" id="diet12">
                                            <div class="checkbox"></div>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= $base_url ?>assets/images/diet_12.svg" alt=""></div>
                                                <div class="txt">
                                                    <span class="fs_6 fw_600">Keto-Friendly</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Calculate</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="diet_demo">
                    <div class="contain-fluid text-center">
                        <div class="sm_blk">
                            <div class="inner">
                                <div class="fig"><img src="<?= $base_url ?>assets/images/loading-animation.gif" alt=""></div>
                                <h3 class="font_1 mt-5">TAKING YOU TO <span class="color">YOUR SWEET SPOT...</span></h3>
                            </div>
                        </div>
                        <div class="btn_blk btn_blk_wrap mt-5 pt-3 align-items-center justify-content-center">
                            <button type="button" class="site_btn back prev_btn">Back</button>
                            <button type="button" class="site_btn longest next_btn">Continue</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset data-name="result">
                    <div class="contain-fluid text-center">
                        <div class="form_wrap flex_blk align-items-center">
                            <div class="form_wrap_inner w-100">
                                <div class="inner">
                                    <div class="logo">
                                        <a href="<?= $base_url ?>index.php">
                                            <img src="<?= $base_url ?>assets/images/logo-dark.svg" alt="">
                                        </a>
                                    </div>
                                    <h2>You’re Almost There!</h2>
                                    <p class="fs_6">Enter your email and we'll send your results!</p>
                                    <div class="form_blk">
                                        <input type="text" name="" id="" class="input" placeholder="Email Address (Optional)">
                                    </div>
                                    <div class="form_blk">
                                        <div class="lbl_btn">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Sign up to latest <strong class="fw_600">Cultural Candy</strong> news, events & exclusive offers.</label>
                                        </div>
                                    </div>
                                    <div class="form_blk">
                                        <div class="lbl_btn">
                                            <input type="checkbox" name="agree" id="agree">
                                            <label for="agree">I agree to the <a href="<?= $base_url ?>terms-conditions.php" target="_blank" class="color text-decoration-underline">term & conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="btn_blk mt-4 mb-5 pb-5 justify-content-center">
                                        <!-- <button type="button" class="site_btn longest">SUBMIT TO SEE YOUR SWEET SPOT</button> -->
                                        <a href="<?= $base_url ?>quiz-result.php" class="site_btn longest">SUBMIT TO SEE YOUR SWEET SPOT</a>
                                        <div class="w-100">
                                            <!-- <button type="button" class="site_btn learn fs_6 fw_700 font_1">Skip and see your result</button> -->
                                            <a href="<?= $base_url ?>quiz-result.php" class="site_btn learn fs_6 fw_700 font_1">Skip and see your result</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_blk mt-5 pt-3 align-items-center">
                                    <button type="button" class="site_btn back prev_btn">Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
        <!-- quiz -->


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