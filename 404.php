<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 Not Found Page — Cultural Candy</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body data-page="not_found">
    <?php require_once 'includes/header.php'; ?>
    <main>


        <section id="not_found">
            <div class="contain-fluid">
                <div class="inside text-center">
                    <div class="top">
                        <div class="num">404</div>
                        <div class="fig"><img src="<?= $base_url ?>assets/images/bitten_chocolate_1.png" alt=""></div>
                    </div>
                    <div class="btm">
                        <h2 class="color">Looks like something’s missing...</h2>
                        <p class="fs_5">It seems like the page you were looking for is not available, doesn’t exist or is not loading correctly.</p>
                        <div class="btn_blk justify-content-center mt-5 pt-3">
                            <a href="<?= $base_url ?>index.php" class="site_btn px">Go Home</a>
                            <a href="<?= $base_url ?>shop-all.php" class="site_btn px">Shop All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- not_found -->


        <!-- <script>
            $(window).on("load", function() {
                window.setTimeout(function() {
                    location.href = "<?= $base_url ?>index.php";
                }, 3000);
            });
        </script> -->
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>