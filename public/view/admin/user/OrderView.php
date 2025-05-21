<h2>Order List</h2>
<a href="/manga_shop/orders/create" class="btn btn-success mb-3">Add New Order</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>tên</th>
            <th> Email</th>
            <th>sdt</th>
            <th>tổng tiền</th>
            <th>trạng thái thanh toán</th>
            <th>tình trạng vận chuyển</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['customer_name']; ?></td>
                <td><?php echo $order['customer_email']; ?></td>
                <td><?php echo $order['customer_phone']; ?></td>
                <td><?php echo $order['total_amount']; ?></td>
                <td><?php echo ucfirst($order['payment_status']); ?></td>
                <td><?php echo ucfirst($order['shipping_status']); ?></td>
                <td>
                   
                    <a href="/manga_shop/orders/edit/<?php echo $order['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/manga_shop/orders/delete/<?php echo $order['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
