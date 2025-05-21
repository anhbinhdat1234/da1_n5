<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DA1_N5</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/style.css" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header py-2">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> DA1_N5@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right d-flex justify-content-end align-items-center">
                            <div class="header__top__right__social me-3">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <?php if (isset($_SESSION['user'])): ?>
                                <div class="me-3 text-dark pr-3">
                                    👋 Hello <strong><?= htmlspecialchars($_SESSION['user']['name']) ?></strong>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="text-dark" id="userDropdown" data-bs-toggle="dropdown">
                                        <i class="fa fa-user-circle fa-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                        <li><a class="dropdown-item" href="index.php?act=profile"><i class="fa fa-id-badge me-1"></i> Profile</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=settings"><i class="fa fa-cog me-1"></i> Setting</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="index.php?act=logout"><i class="fa fa-sign-out me-1"></i> Log Out</a></li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <a href="index.php?act=login" class="text-dark mr-3 me-3"><i class="fa fa-user"></i> Login</a>
                                <a href="index.php?act=register" class="text-dark"><i class="fa fa-user-plus"></i> Register</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="../../public/img/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Main Menu & Search -->
                    <nav class="header__menu d-flex align-items-center justify-content-between">
                        <ul class="mb-0 list-unstyled d-flex">
                            <li class="me-3"><a href="index.php" class="active">Home</a></li>
                            <li class="me-3 position-relative">
                                <a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="index.php?act=shoping-cart">Shoping Cart</a></li>
                                    <li><a href="index.php?act=checkout">Check Out</a></li>
                                    <li><a href="index.php?act=blog-details">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?act=contact">Contact</a></li>
                        </ul>
                        <form action="index.php?act=search" method="GET" class="d-none d-md-block">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search?">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <!-- Mini-cart -->
                    <div class="header__cart position-relative">
                        <a href="#" class="text-dark d-flex align-items-center" id="cartDropdown" data-bs-toggle="dropdown">
                            <i class="fa fa-shopping-bag fa-lg me-1"></i>
                            <span class="badge bg-danger mr-4"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                            <span class="ms-2"> <b>Total:</b><?= number_format(get_cart_total(), 0, ',', '.') ?>₫</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="cartDropdown" style="min-width: 280px;">
                            <?php if (!empty($_SESSION['cart'])): ?>
                                <?php foreach ($_SESSION['cart'] as $item): ?>
                                    <div class="d-flex mb-2">
                                        <div class="flex-grow-1">
                                            <?= htmlspecialchars($item['name']) ?>
                                            <small class="d-block">x<?= $item['quantity'] ?> (<?= number_format($item['price'], 0, ',', '.') ?>₫)</small>
                                        </div>
                                        <div><?= number_format($item['price'] * $item['quantity'], 0, ',', '.') ?>₫</div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="text-end border-top pt-2">
                                    <strong>Total: <?= get_cart_total() ?>₫</strong>
                                    <a href="index.php?act=shoping-cart" class="btn btn-primary btn-sm mt-2">View cart</a>
                                </div>
                            <?php else: ?>
                                <p class="mb-0">Cart is empty</p>
                                <?php endif; ?>`
                        </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open d-lg-none mt-3">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Scripts -->
    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            document.querySelector('.header').classList.toggle('sticky', window.scrollY > 50);
        });
    </script>
</body>

</html>