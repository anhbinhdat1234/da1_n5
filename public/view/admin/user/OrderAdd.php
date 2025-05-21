<h2>Thêm Đơn hàng </h2>
<form action="/manga_shop/orders/store" method="POST">
    <div class="form-group">
        <label for="user_id">User ID</label>
        <input type="number" class="form-control" name="user_id" placeholder="Enter User ID" required>
    </div>
    <div class="form-group">
        <label for="customer_name">tên khách hàng</label>
        <input type="text" class="form-control" name="tên khách hàng" placeholder="Enter Customer Name" required>
    </div>
    <div class="form-group">
        <label for="customer_email">email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Customer Email" required>
    </div>
    <div class="form-group">
        <label for="customer_phone">Số điện thoại</label>
        <input type="text" class="form-control" name="sdt placeholder="Enter Customer Phone" required>
    </div>
    <div class="form-group">
        <label for="total_amount">tổng tiền</label>
        <input type="number" class="form-control" name="total_amount" placeholder="Enter Total Amount" required>
    </div>
    <div class="form-group">
        <label for="payment_method">phương thức thanh toán</label>
        <select name="payment_method" class="form-control">
            <option value="credit_card">thanh toán khi nhận hàng</option>
   
        </select>
    </div>
    <div class="form-group">
        <label for="shipping_address">Địa chỉ</label>
        <textarea class="form-control" name="shipping_address" placeholder="Enter Shipping Address" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Order</button>
</form>
