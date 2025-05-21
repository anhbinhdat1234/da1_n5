<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit;
}

require_once __DIR__ . '/../../../app/helpers/bootstrap.php';
require_once __DIR__ . '/../../../app/includes/connect_db.php';
require_once __DIR__ . '/../../../app/controllers/AdminController.php';

use App\Controllers\AdminController;

$pdo = pdo_get_connection();
$adminController = new AdminController($pdo);

include __DIR__ . '/../layout/header.php';

$act = $_GET['act'] ?? 'dashboard';
switch ($act) { 
    case 'dashboard':
        include __DIR__ . '/user/DashBoardView.php';
        break;
    case 'categories':
        include __DIR__ . '/user/CategoryView.php';
        break;
    case 'store_category':
        $adminController->storeCategory();
        header('Location: index.php?act=categories');
        exit;
    case 'edit_category':
        $id = (int)($_GET['id'] ?? 0);
        $category = $adminController->getCategoryById($id);
        include __DIR__ . '/user/CategoryEdit.php';
        break;
    case 'update_category':
        $id = (int)($_GET['id'] ?? 0);
        $adminController->updateCategory($id);
        header('Location: index.php?act=categories');
        exit;
    case 'delete_category':
        $id = (int)($_GET['id'] ?? 0);
        $adminController->deleteCategory($id);
        header('Location: index.php?act=categories');
        exit;
    default:
        include __DIR__ . '/user/DashBoardView.php';
}

include __DIR__ . '/../layout/footer.php';
