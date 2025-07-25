<!DOCTYPE html>
<html lang="en">

<head>
    <title>Addresses — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="address" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <ul class="bread_crumb simple">
                            <li><a href="<?= $base_url ?>account.php">Account</a></li>
                            <li>Addresses</li>
                        </ul>
                        <div class="txt mb-5">
                            <h5 class="font_1 fw_700">Addresses</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-8">
                                <div class="no_card">
                                    <div class="top">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/icon-home.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="btm">
                                        <h6 class="font_1 fw_700">Add Your Address</h6>
                                        <p>Want faster checkout? Save addresses to expedite the checkout process</p>
                                    </div>
                                    <a href="<?= $base_url ?>add-new-address.php"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- address -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>