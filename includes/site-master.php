<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    $base_url = "https://cultural-candy.herokuapp.com/";
} else {
    $base_url = "http://localhost/office/candy/";
}
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Cultural Candy">
<meta name="description" content="Experience the World Through Candy">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base_url ?>index.php">
<meta property="og:title" content="Cultural Candy">
<meta property="og:description" content="Experience the World Through Candy">
<meta property="og:image" content="<?= $base_url ?>assets/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="<?= $base_url ?>index.php">
<meta property="twitter:title" content="Cultural Candy">
<meta property="twitter:description" content="Experience the World Through Candy">
<meta property="twitter:image" content="<?= $base_url ?>assets/images/thumbnail.jpg">

<!-- Css Files -->
<link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css?<?php echo time(); ?>">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/app.min.css?<?php echo time(); ?>">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/slick.min.css?<?php echo time(); ?>">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/datepicker.min.css?<?php echo time(); ?>">

<!-- JS Files -->
<script src="<?= $base_url ?>assets/js/jquery.min.js?<?php echo time(); ?>"></script>
<script src="<?= $base_url ?>assets/js/bootstrap.bundle.min.js?<?php echo time(); ?>"></script>
<script src="<?= $base_url ?>assets/js/slick.min.js?<?php echo time(); ?>"></script>
<script src="<?= $base_url ?>assets/js/jquery.rateyo.min.js?<?php echo time(); ?>"></script>
<script src="<?= $base_url ?>assets/js/datepicker.min.js?<?php echo time(); ?>"></script>

<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= $base_url ?>assets/images/favicon.png">