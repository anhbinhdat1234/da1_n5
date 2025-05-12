<?php
include __DIR__ . "/layout/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop_details':
            include __DIR__ . "/page/shop-details.php";
            break;
        case 'contact':
            include __DIR__ . "/page/contact.php";
            break;
        case 'login':
            include __DIR__ . "/page/login.php";
            break;
        case 'checkout':
            include __DIR__ . "/page/checkout.php";
            break;
        case 'shoping-cart':
            include __DIR__ . "/page/shoping-cart.php";
            break;
        case 'shop-gird':
            include __DIR__ . "/page/shop-grid.php";
            break;
        default:
            include __DIR__ . "/page/home.php";
            break;
    }
} else {
    include __DIR__ . "/page/home.php";
}

include __DIR__ . "/layout/footer.php";
?>
