<?php
// CategoryEdit.php
?>
<h2>Edit Category</h2>
<form action="index.php?act=update_category&id=<?php echo $category['id']; ?>" method="POST">
    <div class="form-group">
        <label for="category_name">Tên danh mục</label>
        <input type="text" class="form-control" name="category_name" value="<?php echo $category['category_name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="description">mô tả</label>
        <textarea class="form-control" name="description" required><?php echo $category['description']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update </button>
</form>
