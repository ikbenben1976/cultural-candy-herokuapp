<!DOCTYPE html>
<html lang="en">

<head>
    <title>Candy Plan — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="plan">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="plan_banner" style="background-image: url('<?= $base_url ?>assets/images/candy_plan_group.jpg');">
            <div class="contain-fluid z_up">
                <div class="flex_blk justify-content-center">
                    <div class="content text-center">
                        <h2 class="text-white">Experience the World of Candy</h2>
                        <h3>Your Candy Adventure Delivered</h3>
                        <div class="btn_blk justify-content-center mt-5 pt-3">
                            <a href="#candy_plan" class="site_btn run_btn dark longest mobile_100">Get Started</a>
                            <a href="#candy_plan" class="site_btn run_btn longest mobile_100">Give a Gift</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plan_banner -->


        <section id="plan_works">
            <div class="contain-fluid text-center">
                <h2 class="mb-4">This Is How Our <strong>Candy Plan</strong> Works </h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="inner fs_6">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/step1.png" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Step 1</h5>
                                <p>Pick the right Candy Plan for you (or gift one). No subscription, no need to cancel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner fs_6">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/step2.png" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Step 2</h5>
                                <p>Choose when you want to receive the product. Want it all at once, no problem. Need to space it out, wonderful!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner fs_6">
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/step3.png" alt="">
                            </div>
                            <div class="txt">
                                <h5 class="font_1">Step 3</h5>
                                <p>Sit back, and while waiting for your delivery, join our Sweet Exchanges Community and start exploring what we mean by Cultural Candy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plan_works -->


        <section id="candy_plan">
            <div class="contain-fluid">
                <h2 class="text-center mb-5 pb-3">Candy Plan™</h2>
                <div class="row flex_row">
                    <div class="col col-lg-4 col-12">
                        <div class="inner">
                            <h5 class="font_1 fw_700 mb-5 pb-3 text-uppercase text-center">Explorer</h5>
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/01-jr 2.png" alt="">
                            </div>
                            <div class="txt">
                                <ul class="fw_600">
                                    <li>Explore 3 Countries / Collections Boxes</li>
                                    <li>Choose your delivery dates</li>
                                    <li>Each box has 5+ full size treats</li>
                                    <li>$74.99 - Includes Shipping!</li>
                                </ul>
                                <div class="affirm fw_600">Starting at $10/mo with <img src="<?= $base_url ?>assets/images/affirm.svg" alt=""> Prequalify Now</div>
                            </div>
                            <div class="btn_blk justify-content-center">
                                <a href="<?= $base_url ?>candy-plan-explore.php" class="site_btn longest">Make Selections</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="inner">
                            <h5 class="font_1 fw_700 mb-5 pb-3 text-uppercase text-center">WORLD TRAVELER</h5>
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/02-senior 2.png" alt="">
                            </div>
                            <div class="txt">
                                <ul class="fw_600">
                                    <li>Explore 3 Countries / Collections Boxes</li>
                                    <li>Choose your delivery dates</li>
                                    <li>Each box has 5+ full size treats</li>
                                    <li>$74.99 - Includes Shipping!</li>
                                </ul>
                                <div class="affirm fw_600">Starting at $10/mo with <img src="<?= $base_url ?>assets/images/affirm.svg" alt=""> Prequalify Now</div>
                            </div>
                            <div class="btn_blk justify-content-center">
                                <a href="<?= $base_url ?>candy-plan-explore.php" class="site_btn longest">Make Selections</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="inner">
                            <h5 class="font_1 fw_700 mb-5 pb-3 text-uppercase text-center">Nomad</h5>
                            <div class="fig">
                                <img src="<?= $base_url ?>assets/images/03-nomad 2.png" alt="">
                            </div>
                            <div class="txt">
                                <ul class="fw_600">
                                    <li>Explore 3 Countries / Collections Boxes</li>
                                    <li>Choose your delivery dates</li>
                                    <li>Each box has 5+ full size treats</li>
                                    <li>$74.99 - Includes Shipping!</li>
                                </ul>
                                <div class="affirm fw_600">Starting at $10/mo with <img src="<?= $base_url ?>assets/images/affirm.svg" alt=""> Prequalify Now</div>
                            </div>
                            <div class="btn_blk justify-content-center">
                                <a href="<?= $base_url ?>candy-plan-explore.php" class="site_btn longest">Make Selections</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- candy_plan -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>