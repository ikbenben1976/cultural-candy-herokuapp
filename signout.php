<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign out — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="logon">
    <main>


        <section id="logon">
            <div id="pageloader">
                <div class="loader"></div>
            </div>
            <div class="contain-fluid">
                <div class="logo">
                    <a href="<?= $base_url ?>index.php">
                        <img src="<?= $base_url ?>assets/images/logo-dark.svg" alt="">
                    </a>
                </div>
                <form action="<?= $base_url ?>account.php" method="POST">
                    <div class="log_blk">
                        <h5 class="font_1 text-center">Sign into your Cultural Candy account</h5>
                        <p class="sign_para fw_500 text-center">brad*** <span>Not you?</span> <a href="<?= $base_url ?>index.php" class="text-decoration-underline">Sign out</a></p>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                    <label>Enter your email</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk">
                                    <div class="lbl_btn fw_500">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Keep me signed in</label>
                                    </div>
                                    <p class="sm_para">By checking this box you won’t have to sign in as often on this device. For your security, we recommend only checking this box on your personal devices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk">
                            <button type="submit" class="site_btn w-100">Sign In</button>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline">
                            <a href="<?= $base_url ?>forgot-password.php" id="forgot_pass">Forgot password?</a>
                        </div>
                        <div class="btn_blk">
                            <a href="<?= $base_url ?>signup.php" class="site_btn blank stroke w-100">Create Your Cultural Candy Account</a>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline">
                            <a href="<?= $base_url ?>index.php" class="color">Return to Home</a>
                        </div>
                        <div class="text-center fw_500 opacity-50 mt-3 pt-3">
                            <p>By signing in, you agree to the following :</p>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline mt-3 pt-3">
                            <a href="<?= $base_url ?>terms-conditions.php" class="color">Cultural Candy terms and condition</a>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline mt-3 pt-3">
                            <a href="<?= $base_url ?>privacy-policy.php" class="color">Cultural Candy privacy policy.</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- logon -->


    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>