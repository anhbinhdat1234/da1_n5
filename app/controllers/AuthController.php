<?php
// File: app/controllers/AuthController.php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController
{
    private UserModel $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Handle user login
     */
    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header('Location: /public/view/admin_dashboard.php');
                } else {
                    header('Location: /public/view/index.php');
                }
                exit;
            }
            $error = "Sai tài khoản hoặc mật khẩu!";
        }

        $success = $_SESSION['success'] ?? null;
        unset($_SESSION['success']);

        include __DIR__ . '/../../public/view/auth/login.php';
    }

    /**
     * Handle user registration
     */
    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($this->userModel->findByEmail($email)) {
                $error = "Email đã tồn tại!";
            } else {
                $this->userModel->createUser($name, $email, $password);
                $_SESSION['success'] = "Đăng ký thành công! Vui lòng đăng nhập.";
                header('Location: /public/view/auth/login.php');
                exit;
            }
        }

        include __DIR__ . '/../../public/view/auth/register.php';
    }

    /**
     * Handle user logout
     */
    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_unset();
        session_destroy();
        header('Location: /public/view/auth/login.php');
        exit;
    }
}
