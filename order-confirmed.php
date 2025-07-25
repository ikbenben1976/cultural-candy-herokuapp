<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Confirmed — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="cart">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="cart">
            <div class="contain-fluid text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="content fs_6 mb-5 pb-3">
                            <div class="check_icon"><img src="<?= $base_url ?>assets/images/check_circle_icon.svg" alt=""></div>
                            <h2>Thank you for your order!</h2>
                            <p>We’ll send confirmations and order updates to <strong class="fw_600">ben.mishkin@gmail.com</strong></p>
                            <p>Need to make changes? Visit your order details page as soon as possible. You won’t be able to edit your order once it starts processing. You can track the status of your order by clicking on order details below.</p>
                        </div>
                        <h3>Your Order</h3>
                        <div id="slick-order" class="slick-carousel slick-slider">
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/01.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/02.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/03.png" alt=""></div>
                            </div>
                            <div class="item">
                                <div class="ico"><img src="<?= $base_url ?>assets/images/products/04.png" alt=""></div>
                            </div>
                        </div>
                        <div class="btn_blk justify-content-center mt-5 pt-3">
                            <a href="<?= $base_url ?>order-detail.php" class="site_btn px longest">View Order Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>