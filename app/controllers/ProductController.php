<?php
class ProductController {
    public function home() {
        include __DIR__ . '/../../public/page/home.php';
    }

    public function shopGrid() {
        include __DIR__ . '/../../public/page/shop-grid.php';
    }

    public function shopDetails() {
        include __DIR__ . '/../../public/page/shop-details.php';
    }

    public function shoppingCart() {
        include __DIR__ . '/../../public/page/shopping-cart.php';
    }
}
?>
