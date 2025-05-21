<h2>Edit Order</h2>
<form action="/manga_shop/orders/update/<?php echo $order['id']; ?>" method="POST">
    <div class="form-group">
        <label for="payment_status">Payment Status</label>
        <select name="payment_status" class="form-control">
            <option value="unpaid" <?php echo $order['payment_status'] === 'unpaid' ? 'selected' : ''; ?>>Unpaid</option>
            <option value="paid" <?php echo $order['payment_status'] === 'paid' ? 'selected' : ''; ?>>Paid</option>
            <option value="refunded" <?php echo $order['payment_status'] === 'refunded' ? 'selected' : ''; ?>>Refunded</option>
            <option value="failed" <?php echo $order['payment_status'] === 'failed' ? 'selected' : ''; ?>>Failed</option>
        </select>
    </div>
    <div class="form-group">
        <label for="shipping_status">Shipping Status</label>
        <select name="shipping_status" class="form-control">
            <option value="pending" <?php echo $order['shipping_status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
            <option value="in_transit" <?php echo $order['shipping_status'] === 'in_transit' ? 'selected' : ''; ?>>In Transit</option>
            <option value="delivered" <?php echo $order['shipping_status'] === 'delivered' ? 'selected' : ''; ?>>Delivered</option>
            <option value="returned" <?php echo $order['shipping_status'] === 'returned' ? 'selected' : ''; ?>>Returned</option>
            <option value="cancelled" <?php echo $order['shipping_status'] === 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Order</button>
</form>