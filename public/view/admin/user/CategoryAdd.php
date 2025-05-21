<?php
// CategoryAdd.php
?>
<h2>Thêm danh mục mới</h2>
<form action="index.php?act=store_category" method="POST">
    <div class="form-group">
        <label for="category_name">Tên danh mục</label>
        <input type="text" class="form-control" name="category_name" required>
    </div>
    <div class="form-group">
        <label for="description">MÔ Tả</label>
        <textarea class="form-control" name="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
    