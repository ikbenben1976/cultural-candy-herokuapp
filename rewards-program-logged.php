<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rewards Program — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="rewards">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="reward_banner" style="background-image: url('<?= $base_url ?>assets/images/Group 42427.jpg');">
            <div class="contain-fluid">
                <div class="flex_blk align-items-center">
                    <div class="content">
                        <h2 class="mb-5 pb-3">The Cultural Candy Club</h2>
                        <ul class="clip_list fs_5">
                            <li>Club Access to Unique Products & Experiences</li>
                            <li>Rewards & Giveaways</li>
                            <li>Earn Sweet Points</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- reward_banner -->


        <section id="redeem_log">
            <div class="contain-fluid text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <h2 class="mb-4">Hi Ben!</h2>
                            <h2 class="point">You have <span>25</span> Points</h2>
                            <div class="btn_blk mt-5 pt-3 justify-content-center">
                                <a href="#redeem_prod" class="site_btn dark longest run_btn">Redeem Now</a>
                                <button type="button" class="site_btn longest pop_btn" data-popup="reward">Reward History</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="reward">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <h3 class="heading">Rewards History</h3>
                                        <div class="tbl_blk text-center">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                        <th>Points</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>04/25/2022</td>
                                                        <td>Create an account</td>
                                                        <td>25</td>
                                                        <td>Approved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/25/2022</td>
                                                        <td>Create an account</td>
                                                        <td>25</td>
                                                        <td>Approved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/25/2022</td>
                                                        <td>Create an account</td>
                                                        <td>25</td>
                                                        <td>Approved</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/25/2022</td>
                                                        <td>Create an account</td>
                                                        <td>25</td>
                                                        <td>Approved</td>
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
            </div>
        </section>
        <!-- redeem_log -->


        <section id="earn_points">
            <div class="contain-fluid text-center">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <h2 class="mb-5 pb-3">Ways To Earn Points</h2>
                        <div class="flex_row row justify-content-center">
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-user.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">CREATE AN ACCOUNT</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">25 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>You already completed this action</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-dollar.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">EVERY $1 SPENT</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">1 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 1 point for every $1.00 you spend in our store</strong>
                                            <a href="?" class="site_btn mt-4">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-luggage.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">COMPLETE THE TRAVEL TO YOUR SWEET SPOT QUIZ</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">50 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 50 points when COMPLETE THE Travel to Your Sweet Spot Quiz</strong>
                                            <a href="<?= $base_url ?>quiz.php" class="site_btn mt-4">Take Quiz</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-love.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">Join our SWEET Connections COMMUNITY</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">15 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 15 points by Joining our SWEET Connections COMMUNITY</strong>
                                            <a href="?" class="site_btn mt-4">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-star.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">WRITE A REVIEW</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">25 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 25 points for writing a product review </strong>
                                            <br>
                                            <br>
                                            <strong>Bonus: Earn 25 additional points for including a video of you reviewing our product!</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-cake.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">ON YOUR BIRTHDAY</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">100 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 100 points on your birthday</strong>
                                            <form action="" method="POST" class="my-2">
                                                <div class="form_blk mb-3">
                                                    <input type="text" name="" id="" class="input" placeholder="DOB">
                                                </div>
                                                <button type="submit" class="site_btn">Add My Birthday</button>
                                            </form>
                                            <p><small>If your birthday is within the next 30 days, we may request proof</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-facebook.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">FOLLOW US ON FACEBOOK</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">10 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 10 points when you follow our Facebook page</strong>
                                            <a href="?" class="site_btn mt-4">Follow Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-share.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">SHARE US ON FACEBOOK</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">10 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 10 points when you share us on Facebook</strong>
                                            <a href="?" class="site_btn mt-4">Share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-instagram.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">SHARE US ON INSTAGRAM</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">10 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Earn 10 points when you follow us on Instagram</strong>
                                            <a href="?" class="site_btn mt-4">Follow Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-4">
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>assets/images/circle-mailing.svg" alt=""></div>
                                    <div class="txt">
                                        <h6 class="font_1 fw_700">JOIN OUR MAILING LIST</h6>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                        <div class="point">50 Points</div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Join our mailing list and earn 50 points</strong>
                                            <a href="?" class="site_btn mt-4">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-8">
                                <div class="inner d-flex align-items-center justify-content-center">
                                    <div class="txt fs_5">
                                        <h2>Give $10, Get $10</h2>
                                        <p>Refer a friend and get $10*</p>
                                    </div>
                                    <div class="overlay">
                                        <div class="inr">
                                            <strong>Give your friends $10 off on their first order of $50+ and receive $10 for each successful referral*</strong>
                                            <a href="#refer" class="site_btn mt-4 run_btn">Start Referring</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- earn_points -->


        <section id="earn_more" class="pb-0">
            <div class="contain-fluid text-center">
                <h2 class="mb-5 pb-3">VIPS Earn Even More</h2>
                <div class="status_blk text-start">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="font_1 fw_700 pb-2">Tier Status</h5>
                            <p class="fs_6">Earn 475 points to unlock Explorer</p>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-between">
                                <h5 class="font_1 fw_700 mb-0">You</h5>
                                <h5 class="font_1 fw_700 mb-0">Explorer</h5>
                            </div>
                            <div class="progress_bar">
                                <div style="width: 25%;"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="point fw_600">25 Points</div>
                                <div class="point opacity-50">Earn 500 Points</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig"><img src="<?= $base_url ?>assets/images/candy_01.jpg" alt=""></div>
                                <div class="earn fs_6">Earn 500 Points</div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">EXPLORER</h3>
                                <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                <div class="point fs_6">1 X Points Multiplier </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig"><img src="<?= $base_url ?>assets/images/candy_02.jpg" alt=""></div>
                                <div class="earn fs_6">Earn 750 Points</div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">WORLD TRAVELER</h3>
                                <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                <div class="point fs_6">1.5 X Points Multiplier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig"><img src="<?= $base_url ?>assets/images/candy_03.jpg" alt=""></div>
                                <div class="earn fs_6">Earn 1500 Points</div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">NOMAD</h3>
                                <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                <div class="point fs_6">2 X Points Multiplier <span class="d-block mt-4">Early access to sale/ Product launch access</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- earn_more -->


        <section id="redeem_prod">
            <div class="contain-fluid text-center">
                <h2 class="mb-5 pb-3">Redeem For Products</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig">
                                    <img src="<?= $base_url ?>assets/images/goroto_01.png" alt="">
                                </div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">Mystery Box</h3>
                                <div class="point fs_6 fw_600">250 POINTS</div>
                            </div>
                            <div class="btn_blk mt-5 pt-3 justify-content-center">
                                <button type="button" class="site_btn px" disabled>Redeem Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig">
                                    <img src="<?= $base_url ?>assets/images/goroto_02.png" alt="">
                                </div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">Mystery Box</h3>
                                <div class="point fs_6 fw_600">250 POINTS</div>
                            </div>
                            <div class="btn_blk mt-5 pt-3 justify-content-center">
                                <button type="button" class="site_btn px" disabled>Redeem Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner">
                            <div class="fig_blk">
                                <div class="fig">
                                    <img src="<?= $base_url ?>assets/images/goroto_03.png" alt="">
                                </div>
                            </div>
                            <div class="txt">
                                <h3 class="font_1 fw_700">Mystery Box</h3>
                                <div class="point fs_6 fw_600">250 POINTS</div>
                            </div>
                            <div class="btn_blk mt-5 pt-3 justify-content-center">
                                <button type="button" class="site_btn px">Redeem Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- redeem_prod -->


        <section id="redeem">
            <div class="contain-fluid text-center">
                <div class="content mb-5 pb-3 fs_6">
                    <h2>Redeem</h2>
                    <p>Earning points is easy! For redemptions, click on Redeem and copy/paste your discount code and enter during checkout</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="row redeem_row justify-content-between">
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-truck.svg');">
                                        <span>Free Shipping*</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">100 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px">Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-tag.svg');">
                                        <span>$ 10 Off</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">200 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px">Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-tag.svg');">
                                        <span>$ 15 Off</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">300 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px">Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-tag.svg');">
                                        <span>$30 Off</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">450 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px" disabled>Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-tag.svg');">
                                        <span>$40 Off</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">600 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px" disabled>Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="inner">
                                    <div class="icon" style="background-image: url('<?= $base_url ?>assets/images/vector-tag.svg');">
                                        <span>$50 Off</span>
                                    </div>
                                    <div class="txt">
                                        <div class="point fs_5">1000 Points</div>
                                        <div class="line"><img src="<?= $base_url ?>assets/images/curvy_line.svg" alt=""></div>
                                    </div>
                                    <div class="btn_blk mt-5 pt-3 justify-content-center">
                                        <button type="button" class="site_btn px" disabled>Redeem Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="note text-start">See <a href="<?= $base_url ?>terms-conditions.php" class="fw_600 text-decoration-underline text-white">terms and conditions</a> of free shipping</div>
            </div>
        </section>
        <!-- redeem -->


        <section id="refer" style="background-image: url('<?= $base_url ?>assets/images/wallpaperflare 3.jpg');">
            <div class="contain-fluid text-center">
                <div class="inner">
                    <div class="top_blk">
                        <h6>Refer a Friend</h6>
                        <h2>GIVE $10, <br> GET $10</h2>
                        <p class="px-5 mx-2 mb-4">Give your friends $10 off their first order of $50 and get $10 (account credit) for each successful referral</p>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="input" placeholder="Friend’s email address">
                        </div>
                        <div class="btn_blk justify-content-center">
                            <button type="submit" class="site_btn longest mobile_100">Submit</button>
                        </div>
                    </div>
                    <div class="btm_blk">
                        <ul class="social">
                            <li>
                                <a href="?">
                                    <img src="<?= $base_url ?>assets/images/social_link.svg" alt="">
                                    <span>Copy Link</span>
                                </a>
                            </li>
                            <li>
                                <a href="?">
                                    <img src="<?= $base_url ?>assets/images/social_facebook2.svg" alt="">
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="?">
                                    <img src="<?= $base_url ?>assets/images/social_messanger.svg" alt="">
                                    <span>Messanger</span>
                                </a>
                            </li>
                            <li>
                                <a href="?">
                                    <img src="<?= $base_url ?>assets/images/social_twitter2.svg" alt="">
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="?">
                                    <img src="<?= $base_url ?>assets/images/social_whatsapp.svg" alt="">
                                    <span>Whatsapp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- refer -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>