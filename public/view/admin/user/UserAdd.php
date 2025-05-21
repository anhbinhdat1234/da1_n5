<?php
// UserAdd.php
?>
<h2>Add New User</h2>
<form action="/manga_shop/users/store" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" name="role">
            <option value="client">Client</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add User</button>
</form>
