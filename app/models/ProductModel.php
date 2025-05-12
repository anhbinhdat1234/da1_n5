<?php
// include './includes/connect_db.php';
class ProductModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM products";
        return pdo_query($sql);
    }
}
