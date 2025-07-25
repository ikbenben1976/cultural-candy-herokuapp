<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Stories — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="stories">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="banner" style="background-image: url('<?= $base_url ?>assets/images/opening-image 1.jpg');">
            <div class="contain-fluid z_up">
                <div class="flex_blk align-items-center justify-content-center">
                    <div class="content text-center">
                        <h2 class="text-uppercase mb-5 pb-3">All Stories</h2>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <form action="" method="POST" class="srch_bar">
                                    <div class="form_blk input">
                                        <input type="text" name="" id="" class="input" placeholder="Search Stories">
                                        <button type="submit" class="ico_btn"><img src="<?= $base_url ?>assets/images/icon-search2.svg" alt=""></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ellipse fs_3 font_2 fw_600">
                        <div class="txt flex-grow-1">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h3 class="mb-0">Author Name</h3>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="dot_btn">
                <img src="<?= $base_url ?>assets/images/vector-dots.svg" alt="">
                <img src="<?= $base_url ?>assets/images/icon-cross.svg" alt="">
            </button>
        </section>
        <!-- banner -->


        <section id="all_categories" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="sort_top_blk">
                    <div class="sort_blk">
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">
                                <strong class="fs_6 fw_600">All:</strong>
                                <span>&nbsp;</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                <li><button type="button">Popular</button></li>
                                <li><button type="button">Popular 01</button></li>
                                <li><button type="button">Popular 02</button></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle select chevron input" data-bs-toggle="dropdown">
                                <strong class="fs_6 fw_600">Sort By:</strong>
                                <span>Latest</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                <li><button type="button">Popular</button></li>
                                <li><button type="button">Popular 01</button></li>
                                <li><button type="button">Popular 02</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex_row row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder2.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_watch_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">See how Josefa, “Doñaa Pepa”herritage and Turron</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <div class="btn_blk w-100 justify-content-between">
                                    <span class="badge color">Watch</span>
                                    <span class="badge">3:14</span>
                                </div>
                            </div>
                            <a href="<?= $base_url ?>story-video.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder3.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder4.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder5.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder6.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_watch_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder7.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">See how Josefa, “Doñaa Pepa”herritage and Turron</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <div class="btn_blk w-100 justify-content-between">
                                    <span class="badge color">Watch</span>
                                    <span class="badge">3:14</span>
                                </div>
                            </div>
                            <a href="<?= $base_url ?>story-video.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder2.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_watch_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Blog_DiaDeLosMuertos_3.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">See how Josefa, “Doñaa Pepa”herritage and Turron</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <div class="btn_blk w-100 justify-content-between">
                                    <span class="badge color">Watch</span>
                                    <span class="badge">3:14</span>
                                </div>
                            </div>
                            <a href="<?= $base_url ?>story-video.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder3.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder4.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder5.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_story_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder6.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Lorem quis sunt maga dolor Sunt magna dolor sit emet</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <strong class="color">10 min Read</strong>
                            </div>
                            <a href="<?= $base_url ?>story-article.php"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="mini_watch_blk">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/Image Placeholder7.jpg" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">See how Josefa, “Doñaa Pepa”herritage and Turron</h5>
                                <p>Lorem quis sunt magna dolor consectetur aliqua officia laborum reprehenderit Lorem quis sunt magna dolor consectetur.</p>
                                <div class="btn_blk w-100 justify-content-between">
                                    <span class="badge color">Watch</span>
                                    <span class="badge">3:14</span>
                                </div>
                            </div>
                            <a href="<?= $base_url ?>story-video.php"></a>
                        </div>
                    </div>
                </div>
                <div class="btn_blk justify-content-center mt-5 pt-3">
                    <a href="<?= $base_url ?>stories.php" class="site_btn px simple stroke">Load More</a>
                </div>
            </div>
        </section>
        <!-- all_categories -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>