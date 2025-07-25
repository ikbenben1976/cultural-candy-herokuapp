<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up — Cultural Candy</title>
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
                        <h5 class="font_1 text-center">Create Your Cultural Candy Account</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                    <label>Email address</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: John">
                                    <label>First name</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: Wick">
                                    <label>Last name</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: “+1-xxx-xxx-xxxx">
                                    <label>Mobile phone number (optional)</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk pass_blk form-floating">
                                    <input type="password" name="" id="" class="input" placeholder="eg: PassLogin%7">
                                    <label>Create password</label>
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h6 class="font_1">Must contain:</h6>
                                <ul class="pass_list">
                                    <li>8-20 characters</li>
                                </ul>
                                <h6 class="font_1">And 2 of the following:</h6>
                                <ul class="pass_list">
                                    <li class="active">Lowercase letters</li>
                                    <li class="active">Uppercase letters</li>
                                    <li>Numbers</li>
                                    <li>Special characters, except &lt; &gt;</li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <div class="form_blk">
                                    <div class="lbl_btn fw_500">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Keep me signed in</label>
                                    </div>
                                    <!-- <p class="sm_para">By checking this box you won’t have to sign in as often on this device. For your security, we recommend only checking this box on your personal devices.</p> -->
                                    <p class="sm_para fw_500">By creating an account, you are agreeing to the Cultural Candy terms & conditions and Cultural Candy privacy policy, including occasional promotional emails unless you opt out of these communications. To manage your communication options, please navigate to the communication preference section of your Account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk">
                            <button type="submit" class="site_btn w-100">Create Account</button>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline">
                            <a href="<?= $base_url ?>signin.php" class="color">Or sign in</a>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline mt-3 pt-3">
                            <a href="<?= $base_url ?>index.php" class="color">Return to Home</a>
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