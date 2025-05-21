<?php
// UserEdit.php
?>
<h2>Edit User</h2>
<form action="/manga_shop/users/update/<?php echo $user['id']; ?>" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password (Leave blank to keep current password)</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" name="role">
            <option value="client" <?php echo $user['role'] === 'client' ? 'selected' : ''; ?>>Client</option>
            <option value="admin" <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>