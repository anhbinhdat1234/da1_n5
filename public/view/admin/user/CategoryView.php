<a href="/da1_n5/categories/create" class="btn btn-info mb-3">Add New Category</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Ngày Tạo</th>
            <th scope="col">Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <th scope="row"><?php echo $category['id']; ?></th>
                <td><?php echo $category['category_name']; ?></td>
                <td><?php echo $category['description']; ?></td>
                <td><?php echo $category['created_at']; ?></td>
                <td>
                    <!-- Edit and Delete buttons with custom styling -->
                    <a href="/manga_shop/categories/edit/<?php echo $category['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/manga_shop/categories/delete/<?php echo $category['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
