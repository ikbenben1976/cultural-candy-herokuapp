<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="account" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top_head flex-row mb-4">
                                    <h5 class="font_1 fw_700 m-0">Orders</h5>
                                    <div class="btn_blk">
                                        <a href="<?= $base_url ?>orders.php" class="link_btn">View All</a>
                                    </div>
                                </div>
                                <div class="no_card">
                                    <div class="top">
                                        <div class="ico">
                                            <img src="<?= $base_url ?>assets/images/icon-order.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="btm">
                                        <h6 class="font_1 fw_700">Manage Online Order</h6>
                                        <p>When you order from Cultural Candy, you will be able to see tracking, details, and more in your account </p>
                                    </div>
                                    <a href="<?= $base_url ?>orders.php"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="top_head flex-row mb-4">
                                    <h5 class="font_1 fw_700 m-0">Recently Viewed</h5>
                                    <div class="btn_blk">
                                        <a href="<?= $base_url ?>recently-viewed.php" class="link_btn">View All</a>
                                    </div>
                                </div>
                                <div class="gray_box">
                                    <div class="inner">
                                        <div class="txt">
                                            <h6 class="font_1 fw_700">No Items Found</h6>
                                            <p>When you browse Cultural Candy your recently viewed items will appear here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="top_head flex-row mb-4">
                                    <h5 class="font_1 fw_700 m-0">Payments</h5>
                                    <div class="btn_blk">
                                        <a href="<?= $base_url ?>payment-method.php" class="link_btn">View All</a>
                                    </div>
                                </div>
                                <div class="gray_box">
                                    <div class="inner">
                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-credit-card.svg" alt=""></div>
                                        <div class="txt">
                                            <h6 class="font_1 fw_700">Add Payment</h6>
                                            <p>Add a secure payment method</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="font_1 fw_700">Rewards Program</h5>
                                <div class="row flex_row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="gray_box reward_block d-flex flex-column">
                                            <h5 class="font_1 fw_700">My Balance: 200 points</h5>
                                            <p>Reward codes</p>
                                            <div class="scroller scrollbar">
                                                <ul class="reward_list">
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>150 Points</p>
                                                        </div>
                                                        <a href="?" class="site_btn md">View</a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>150 Points</p>
                                                        </div>
                                                        <a href="?" class="site_btn md">View</a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>150 Points</p>
                                                        </div>
                                                        <a href="?" class="site_btn md">View</a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>150 Points</p>
                                                        </div>
                                                        <a href="?" class="site_btn md">View</a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-price.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">Ways to earn</p>
                                                        </div>
                                                        <a href="?" class="mini_btn"><img src="<?= $base_url ?>assets/images/icon-chevron-right.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift2.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">Ways to redeem</p>
                                                        </div>
                                                        <a href="?" class="mini_btn"><img src="<?= $base_url ?>assets/images/icon-chevron-right.svg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="gray_box reward_block d-flex flex-column">
                                            <h5 class="font_1 fw_700">Reward Status</h5>
                                            <div class="scroller scrollbar">
                                                <ul class="reward_list">
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>200 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift3.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">Mystery Box</p>
                                                            <p>250 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-coupon.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$15 off coupon</p>
                                                            <p>300 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift3.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$15 off coupon</p>
                                                            <p>300 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift3.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">Mystery Box</p>
                                                            <p>300 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <div class="ico"><img src="<?= $base_url ?>assets/images/vector-gift2.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p class="fs_6 fw_500">$10 off coupon</p>
                                                            <p>200 Points</p>
                                                        </div>
                                                        <a class="mini_btn"><img src="<?= $base_url ?>assets/images/vector-circle.svg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="gray_box reward_block d-flex flex-column">
                                            <h5 class="font_1 fw_700">Referral Status</h5>
                                            <ul class="reward_list">
                                                <li>
                                                    <div class="txt">
                                                        <p class="fs_6 fw_500">Refer your friends</p>
                                                        <p>0 referrals completed</p>
                                                    </div>
                                                    <a href="?" class="mini_btn"><img src="<?= $base_url ?>assets/images/icon-chevron-right.svg" alt=""></a>
                                                </li>
                                            </ul>
                                            <div class="br"></div>
                                            <div class="form_blk input border-0">
                                                <input type="text" name="" id="" class="input" value="http://i.refs/cc/jNkRuOQG?smilesdfef3efasf3asfsdg">
                                                <button class="ico_btn"><img src="<?= $base_url ?>assets/images/icon-copy.svg" alt=""></button>
                                            </div>
                                            <p>Share this URL to give your friends the reward $10 off coupon</p>
                                            <div class="br"></div>
                                            <ul class="social">
                                                <li>
                                                    <a href="?">
                                                        <img src="<?= $base_url ?>assets/images/social_facebook2.svg" alt="">
                                                        <span>Facebook</span>
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
                                                        <img src="<?= $base_url ?>assets/images/social_email.svg" alt="">
                                                        <span>Email</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="top_head flex-row mb-4">
                                    <h5 class="font_1 fw_700 m-0">Addresses</h5>
                                    <div class="btn_blk">
                                        <a href="<?= $base_url ?>addresses.php" class="link_btn">View All</a>
                                    </div>
                                </div>
                                <div class="gray_box">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="inner">
                                                <div class="ico"><img src="<?= $base_url ?>assets/images/vector-home.svg" alt=""></div>
                                                <div class="txt">
                                                    <h6 class="font_1 fw_700">Add Your Address</h6>
                                                    <p>Want faster checkout? Save addresses to expedited the checkout process</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="top_head flex-row mb-4">
                                    <h5 class="font_1 fw_700 m-0">My Profile</h5>
                                    <div class="btn_blk">
                                        <a href="<?= $base_url ?>profile.php" class="link_btn">View All</a>
                                    </div>
                                </div>
                                <div class="gray_box">
                                    <div class="profile_row">
                                        <div class="outer slider_row">
                                            <div class="inner">
                                                <div class="txt">
                                                    <h6 class="font_1">About Me</h6>
                                                    <p>Ben Mishkin</p>
                                                </div>
                                                <a href="<?= $base_url ?>edit-profile.php"></a>
                                            </div>
                                            <div class="inner">
                                                <div class="txt">
                                                    <h6 class="font_1">Communication Preferences</h6>
                                                    <p>ben.mishkin@gmail.com</p>
                                                    <p>(***) ***-1258</p>
                                                </div>
                                                <a href="<?= $base_url ?>profile.php"></a>
                                            </div>
                                        </div>
                                        <div class="add_btn text-center">
                                            <a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>assets/images/icon-plus.svg" alt=""></a>
                                            <p>View All</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="font_1 fw_700">Need Help?</h5>
                                <div class="gray_box">
                                    <div class="btn_blk fs_5 text-center">
                                        <a href="<?= $base_url ?>faq.php" class="help_btn">Account FAQ?</a>
                                        <a href="?" class="help_btn">Live Chat</a>
                                        <a href="<?= $base_url ?>faq.php" class="help_btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>