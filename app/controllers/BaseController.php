<?php
namespace App\Controllers;

abstract class BaseController
{
    protected function shareCartData(): array
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $count = ! empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
        $total = get_cart_total();

        return [
            'cartCount' => $count,
            'cartTotal' => $total,
        ];
    }

    protected function render(string $view, array $data = []): void
    {
        // Lấy thêm dữ liệu chung (cart)
        $shared = $this->shareCartData();
        $data   = array_merge($shared, $data);
        extract($data);

        // Gọi header/footer và view
        include __DIR__ . '/../../public/includes/header.php';
        $viewFile = __DIR__ . '/../../public/view/' . $view . '.php';
        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            include __DIR__ . '/../../public/view/404.php';
        }
        include __DIR__ . '/../../public/includes/footer.php';
    }
}
