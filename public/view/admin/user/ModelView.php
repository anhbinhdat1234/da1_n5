<a href="/manga_shop/models/create" class="btn btn-info mb-3">Add New Model</a>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Mô Hình</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Giá</th>
            <th scope="col">Thương Hiệu</th>
            <th scope="col">Kích Thước</th>
            <th scope="col">Ảnh</th> <!-- Added column for image -->
            <th scope="col">Ngày Tạo</th>
            <th scope="col">Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($models as $model) : ?>
            <tr>
                <th scope="row"><?php echo $model['id']; ?></th>
                <td><?php echo $model['model_name']; ?></td>
                <td>
                    <?php
                    // Lấy tên danh mục từ danh mục có ID tương ứng
                    // $categoryModel = new App\Models\CategoryModel();
                    $category = $categoryModel->getCategoryById($model['category_id']);
                    echo $category ? $category['category_name'] : 'Unknown';
                    ?>
                </td>
                <td><?php echo number_format($model['price'], 0, ',', '.'); ?> VND</td>
                <td><?php echo $model['brand']; ?></td>
                <td><?php echo $model['dimensions']; ?></td>
                
                <!-- Displaying the image with Bootstrap classes -->
                <td>
                    <?php if (!empty($model['images'])) : ?>
                        <img src="<?php echo $model['images']; ?>" alt="Image of <?php echo $model['model_name']; ?>" class="img-fluid rounded border justify-content-center" style="max-width: 150px;">
                    <?php else: ?>
                        <span>No image</span>
                    <?php endif; ?>
                </td>
                
                <td><?php echo $model['created_at']; ?></td>
                <td>
                    <a href="/manga_shop/models/edit/<?php echo $model['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/manga_shop/models/delete/<?php echo $model['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
