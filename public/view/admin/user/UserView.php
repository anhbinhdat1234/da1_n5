<?php
// UserView.php
?>
<h2>Users Management</h2>
<a href="/manga_shop/users/create" class="btn btn-info mb-3">Add New User</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">quyền</th>
            <th scope="col">Thời gian tạo</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <th scope="row"><?php echo $user['id']; ?></th>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo ucfirst($user['role']); ?></td>
                <td><?php echo $user['created_at']; ?></td>
                <td>
                    <a href="/manga_shop/users/edit/<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/manga_shop/users/delete/<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
