<?php
namespace App\Controllers;

use PDO;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\PaymentModel;
use App\Models\AdminModel;

class AdminController
{
    private PDO $db;
    private CategoryModel $categoryModel;
    private ProductModel $productModel;
    private UserModel $userModel;
    private OrderModel $orderModel;
    private PaymentModel $paymentModel;
    private AdminModel $adminModel;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->categoryModel = new CategoryModel($db);
        $this->productModel  = new ProductModel($db);
        $this->userModel     = new UserModel($db);
        $this->orderModel    = new OrderModel($db);
        $this->paymentModel  = new PaymentModel($db);
        $this->adminModel    = new AdminModel($db);
    }

    public function listCategories(): array
    {
        return $this->categoryModel->all();
    }

    public function storeCategory(): void
    {
        $name = $_POST['name'] ?? '';
        if ($name !== '') {
            $this->categoryModel->create(['name' => $name]);
        }
    }

    public function getCategoryById(int $id)
    {
        return $this->categoryModel->find($id);
    }

    public function updateCategory(int $id): void
    {
        $name = $_POST['name'] ?? '';
        if ($name !== '') {
            $this->categoryModel->update($id, ['name' => $name]);
        }
    }

    public function deleteCategory(int $id): void
    {
        $this->categoryModel->delete($id);
    }

}
