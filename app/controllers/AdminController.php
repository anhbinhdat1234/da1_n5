<?php
class AdminController {
    public function dashboard() {
        // Load trang dashboard của admin
        include __DIR__ . '/../../app/view/page/dashboard.php';
    }

    public function manageProducts() {
        // Load trang quản lý sản phẩm
        include __DIR__ . '/../view/page/manage-products.php';
    }

    public function manageUsers() {
        // Load trang quản lý người dùng
        include __DIR__ . '/../view/page/manage-users.php';
    }
}
?>
