<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping cart — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="cart">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="cart" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="cart_table cart_table_empty text-center">
                            <h2>Your Cart is Empty</h2>
                            <p class="fs_6 fw_500">Why wait? Travel to Your Sweet Spot Now!</p>
                            <div class="btn_blk justify-content-center my-5 py-3">
                                <a href="<?= $base_url ?>index.php" class="site_btn longest mobile_100">Go to Home Page</a>
                            </div>
                            <div class="fig"><img src="<?= $base_url ?>assets/images/empty_cart.svg" alt=""></div>
                        </div>
                        <div class="br"></div>
                        <div class="save_later_blk">
                            <div class="top fs_5 text-center">Saved for later (2)</div>
                            <div class="cart_table">
                                <table class="cart_table_in w-100">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico">
                                                        <a href="<?= $base_url ?>product-detail.php">
                                                            <img src="<?= $base_url ?>assets/images/products/01.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400"><a href="<?= $base_url ?>product-detail.php">Korean Collection</a></h6>
                                                        <div class="rateYo"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <div class="btn_blk justify-content-md-center">
                                                        <button type="button" class="site_btn md">Add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="prod_blk">
                                                    <div class="ico">
                                                        <a href="<?= $base_url ?>product-detail.php">
                                                            <img src="<?= $base_url ?>assets/images/products/02.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="txt">
                                                        <h6 class="font_1 fw_400"><a href="<?= $base_url ?>product-detail.php">Korean Collection</a></h6>
                                                        <div class="rateYo"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <strong class="fs_6">$ 16.99</strong>
                                                    <div class="btn_blk justify-content-md-center">
                                                        <button type="button" class="site_btn md">Add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td width="10">
                                                <button type="button" class="x_btn"></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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