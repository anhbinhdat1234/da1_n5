<?php
// session_start();
include_once __DIR__ . "/../models/UserModel.php";

class AuthController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                exit;
            } else {
                $error = "Sai tài khoản hoặc mật khẩu!";
            }
        }

        $success = $_SESSION['success'] ?? null;
        unset($_SESSION['success']);

        include __DIR__ . "/../../public/view/auth/login.php";
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($this->userModel->findByEmail($email)) {
                $error = "Email đã tồn tại!";
            } else {
                $this->userModel->create($name, $email, $password);
                $_SESSION['success'] = "Đăng ký thành công! Vui lòng đăng nhập.";
                exit;
            }
        }
        include __DIR__ . "/../../public/view/auth/register.php";
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
