<?php
include __DIR__ . "/layout/header.php";
include __DIR__ . "/../../app/controllers/AuthController.php";
include __DIR__ . "/../../app/includes/connect_db.php";

$pdo = pdo_get_connection();
$authController = new AuthController($pdo);

$act = $_GET['act'] ?? '';

switch ($act) {
    case 'shop_details':
        include __DIR__ . "/page/shop-details.php";
        break;
    case 'contact':
        include __DIR__ . "/page/contact.php";
        break;
    case 'login':
        $authController->login();
        break;
    case 'register':
        $authController->register();
        break;
    case 'checkout':
        include __DIR__ . "/page/checkout.php";
        break;
    case 'shopping-cart':
        include __DIR__ . "/page/shopping-cart.php";
        break;
    default:
        include __DIR__ . "/page/home.php";
        break;
}

include __DIR__ . "/layout/footer.php";
?>
