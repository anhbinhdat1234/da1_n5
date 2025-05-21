<h2>Edit Model</h2>

<form action="/da1_n5/models/update/<?php echo $model['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
            <option value="">Select Category</option>
            <?php foreach ($categories as $category) : ?>
                <!-- Kiểm tra nếu category_id là category của model đang chỉnh sửa, chọn option đó -->
                <option value="<?php echo $category['id']; ?>" <?php echo isset($model) && $model['category_id'] == $category['id'] ? 'selected' : ''; ?>>
                    <?php echo $category['category_name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="model_name">Model Name</label>
        <input type="text" class="form-control" id="model_name" name="model_name" value="<?php echo $model['model_name']; ?>" required>
    </div>

    <div class="form-group">
        <label for="description">mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $model['description']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="price">giá</label>
        <input type="number" class="form-control" id="price" name="price" value="<?php echo $model['price']; ?>" required>
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $model['brand']; ?>" required>
    </div>

    <div class="form-group">
        <label for="scale">tỉ lệ</label>
        <input type="text" class="form-control" id="scale" name="scale" value="<?php echo $model['scale']; ?>" required>
    </div>

    <div class="form-group">
        <label for="material">chất liệu</label>
        <input type="text" class="form-control" id="material" name="material" value="<?php echo $model['material']; ?>" required>
    </div>

    <div class="form-group">
        <label for="dimensions">Dimensions</label>
        <input type="text" class="form-control" id="dimensions" name="dimensions" value="<?php echo $model['dimensions']; ?>" required>
    </div>

    <div class="form-group">
        <label for="images">Images</label>
        <input type="file" class="form-control-file" id="images" name="images">
        <small class="form-text text-muted">Leave empty if you don't want to change the image.</small>
    </div>

    <div class="form-group">
        <label for="stock_quantity">Stock Quantity</label>
        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo $model['stock_quantity']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Model</button>
</form>
