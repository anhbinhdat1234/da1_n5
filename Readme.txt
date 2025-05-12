-- Tính năng
    3.2.1,Quản lý sản phẩm (thêm, sửa, xóa sản phẩm)
    3.2.2, Quản lý đơn hàng (xem và cập nhật trạng thái)
    3.2.3, Quản lý người dùng (xem, quản lý quyền truy cập)
    3.2.4, Thống kê và báo cáo doanh thu (*)

-- Tree folder
manga_shop/
├── app/
│   ├── controllers/
│   │   ├── AdminController.php
│   │   └── AuthController.php
│   ├── models/
│   │   ├── UserModel.php
│   │   └── ProductModel.php
│   ├── views/
│   │   ├── admin/
│   │   │   ├── dashboard.php
│   │   │   ├── login.php
│   │   │   └── product-list.php
│   │   └── layout/
│   │       └── admin-layout.php
│   ├── core/
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   ├── Router.php
│   │   └── Database.php
│ 
│      
├── public/
│   ├── css/
│   ├── js/
│   ├── index.php
├── .htaccess
└── composer.json
