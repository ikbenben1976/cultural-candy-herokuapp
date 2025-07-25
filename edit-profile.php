<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit My Profile — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="account">
    <?php require_once 'includes/header-logged.php'; ?>
    <main>


        <section id="profile" class="sec_pad_top">
            <div class="contain-fluid">
                <div class="out_wrapper">
                    <?php require_once 'includes/sidebar.php'; ?>
                    <div class="r_side">
                        <ul class="bread_crumb simple">
                            <li><a href="<?= $base_url ?>account.php">Account</a></li>
                            <li><a href="<?= $base_url ?>profile.php">My Profile</a></li>
                            <li>Edit</li>
                        </ul>
                        <h5 class="font_1 fw_700">Edit My Profile</h5>
                        <form action="" method="POST">
                            <div class="upload_dp">
                                <div class="ico fill round"><img src="<?= $base_url ?>assets/images/users/4.jpg" alt=""></div>
                                <button type="button"><img src="<?= $base_url ?>assets/images/icon-camera.svg" alt=""></button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_blk form-floating">
                                        <input type="text" name="" id="" class="input" placeholder="eg: John">
                                        <label>First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_blk form-floating">
                                        <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                        <label>Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_blk mt-5 pt 3">
                                <button type="button" class="site_btn simple stroke flex-grow-1">Cancel</button>
                                <button type="submit" class="site_btn flex-grow-1">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>