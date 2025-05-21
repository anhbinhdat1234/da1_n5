<?php

declare(strict_types=1);

require_once __DIR__ . '/../../app/helpers/bootstrap.php';

require_once __DIR__ . '/../../app/includes/connect_db.php';
$pdo = pdo_get_connection();

require_once __DIR__ . '/../../app/models/BaseModel.php';
require_once __DIR__ . '/../../app/models/UserModel.php';
require_once __DIR__ . '/../../app/controllers/AuthController.php';

use App\Controllers\AuthController;
use App\Models\UserModel;

$authController = new AuthController(new UserModel($pdo));

include __DIR__ . '/../../public/view/layout/header.php';
$action = $_GET['act'] ?? 'home';
switch ($action) {
    case 'shop_details':
        include __DIR__ . '/../../public/view/page/shop-details.php';
        break;
    case 'contact':
        include __DIR__ . '/../../public/view/page/contact.php';
        break;
    case 'login':
        $authController->login();
        break;
    case 'register':
        $authController->register();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'checkout':
        include __DIR__ . '/../../public/view/page/checkout.php';
        break;
    case 'shopping-cart':
        include __DIR__ . '/../../public/view/page/shopping-cart.php';
        break;
    case 'home':
    default:
        include __DIR__ . '/../../public/view/page/home.php';
        break;
}

include __DIR__ . '/../../public/view/layout/footer.php';