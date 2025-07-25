<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password — Cultural Candy</title>
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
                <form action="" method="POST">
                    <div class="log_blk">
                        <h5 class="font_1 text-center">Recover Password</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form_blk form-floating">
                                    <input type="text" name="" id="" class="input" placeholder="eg: sample@gmail.com">
                                    <label>Enter your email</label>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk">
                            <button type="submit" class="site_btn w-100">Recover Password</button>
                        </div>
                        <div class="text-center fw_500 text-decoration-underline">
                            <a href="<?= $base_url ?>signin.php">Cancel</a>
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