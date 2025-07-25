<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Gallery — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="explore">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="explore_gallery" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="content fs_6 text-center mb-5 pb-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <h2>Cultural Art</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="photos">
                        <div class="row flex_row">
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt1.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt2.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt3.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt2.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt1.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt3.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt2.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt3.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt1.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt3.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt2.jpg" alt="">
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <button type="button" class="fig pop_btn" data-popup="detail">
                                    <img src="<?= $base_url ?>assets/images/culturalArt1.jpg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tray">
                        <button type="button" class="x_btn"></button>
                        <div class="fig"><img src="<?= $base_url ?>assets/images/culturalArtMain.jpg" alt=""></div>
                        <div class="txt fs_6 scrollbar">
                            <h3 class="font_1 fw_700">Cultural</h3>
                            <p>Cultural Candy is much more than an international candy store. It is a place of exploration, cultural connection, and introduction to places far beyond reach for many. Candy is universal and represents the perfect ‘tour guide’ for global exploration. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatibus veritatis totam consequuntur aspernatur nisi eveniet. Necessitatibus praesentium libero totam doloribus, fuga cumque exercitationem provident? Nam vel soluta consectetur voluptate? </p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="popup" data-popup="detail">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="_inner">
                                        <button type="button" class="x_btn"></button>
                                        <div class="fig"><img src="<?= $base_url ?>assets/images/culturalArtMain.jpg" alt=""></div>
                                        <div class="txt fs_6 scrollbar">
                                            <h3 class="font_1 fw_700">Cultural</h3>
                                            <p>Cultural Candy is much more than an international candy store. It is a place of exploration, cultural connection, and introduction to places far beyond reach for many. Candy is universal and represents the perfect ‘tour guide’ for global exploration. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatibus veritatis totam consequuntur aspernatur nisi eveniet. Necessitatibus praesentium libero totam doloribus, fuga cumque exercitationem provident? Nam vel soluta consectetur voluptate? </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- explore_gallery -->


        <!-- <script>
            $(window).on("load", function() {
                $(document).on("click", "#explore_gallery .photos .fig", function() {
                    $("#explore_gallery .inside").toggleClass("move");
                });
                $(document).on("click", "#explore_gallery .tray .x_btn", function() {
                    $("#explore_gallery .inside").removeClass("move");
                });
            });
        </script> -->
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>