<form action="/da1_n5/models/store" method="POST" enctype="multipart/form-data">
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
        <label for="model_name">tên model</label>
        <input type="text" class="form-control" id="model_name" name="model_name" placeholder="Enter model name" required>
    </div>

    <div class="form-group">
        <label for="description">mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter model description" required></textarea>
    </div>

    <div class="form-group">
        <label for="price">Giá</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand" required>
    </div>

    <div class="form-group">
        <label for="scale">tỉ lệ</label>
        <input type="text" class="form-control" id="scale" name="scale" placeholder="Enter scale" required>
    </div>

    <div class="form-group">
        <label for="material">vật liệu</label>
        <input type="text" class="form-control" id="material" name="material" placeholder="Enter material" required>
    </div>

    <div class="form-group">
        <label for="dimensions">kích thước</label>
        <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="Enter dimensions" required>
    </div>

    <div class="form-group">
        <label for="images">Images</label>
        <input type="file" class="form-control-file" id="images" name="images" required>
    </div>

    <div class="form-group">
        <label for="stock_quantity">Số lượngg trong kho</label>
        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Model</button>
</form>